/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import SahtiTN.entities.Medicament;
import SahtiTN.entities.User;
import SahtiTN.services.ServiceMedicament;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author Ennaifer Khalil
 */
public class AfficherMedicamentForm extends Form {

    private EncodedImage placeHolder;

    private int iduser;
    Form current;

    public AfficherMedicamentForm(Form previous, User u) {
        this.iduser = u.getId();
        current = this;
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u, current).show());
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());
        setTitle("Afficher Medicaments");
        setLayout(BoxLayout.y());

        
       
        Button bt_RechercheMedicament = new Button("Recherche Medicament");
        bt_RechercheMedicament.setMaterialIcon(FontImage.MATERIAL_SEARCH);
        bt_RechercheMedicament.addActionListener(e -> new RechercherMedicamentForm(previous, u).show());
        add(bt_RechercheMedicament);

        ArrayList<Medicament> medicaments = ServiceMedicament.getInstance().afficherMedicament();
        for (Medicament med : medicaments) {

            add(addMedicamentHolder(med));

            Button btnSupp = new Button("Supprimer");
            btnSupp.addActionListener((evt) -> {
                if (Dialog.show("Warning", "Voulez-vous vraiment supprimer?", "OUI", "NON")) {
                    try {
                        if (ServiceMedicament.getInstance().removeMedicament(med.getId())) {
                            Dialog.show("Success", "Connection accepted", new Command("OK"));
                        } else {
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    new AfficherMedicamentForm(previous, u).show();
                }
            });
            Button btnModif = new Button("Modifier");
            btnModif.addActionListener(e -> new UpdateMedicamentForm(previous, med, u).show());

            Container btHolder = new Container(BoxLayout.x());
            btHolder.addAll(btnSupp, btnModif);
            addAll(btHolder);
        }
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                e -> previous.showBack());
    }

    public Container addMedicamentHolder(Medicament medicament) {

        try {
            Container holderLabel = new Container(BoxLayout.y());
            Container Info = new Container(BoxLayout.y());
            Container LabelInfo = new Container(BoxLayout.x());
            Container holder = new Container(BoxLayout.y());

            Label lbNom = new Label("Nom :");
            Label lbDesc = new Label("Description :");
            Label lbDispo = new Label("Disponibilité :");
            Label lbDate = new Label("Date de modification :");

            Label Nom = new Label(medicament.getNom_medicament());
            Label Desc = new Label(String.valueOf(medicament.getDescmedicament()));
            Label Dispo = new Label(String.valueOf(medicament.getDispo()));
            Label Date = new Label(String.valueOf(medicament.getDate_modif()));

            ImageViewer imavu;
            placeHolder = EncodedImage.createFromImage(MyApplication.theme.getImage("Cadre.png"), false);

            String url = "http://localhost/PIJAVA/uploads/" + medicament.getImg_medicament();
            Image img = URLImage.createToStorage(placeHolder, url, url, URLImage.RESIZE_SCALE);
            imavu = new ImageViewer(img);

            Info.addAll(Nom, Desc, Dispo, Date);
            holderLabel.addAll(lbNom, lbDesc, lbDispo, lbDate);
            LabelInfo.addAll(holderLabel, Info);
            holder.addAll(LabelInfo, imavu);

            holder.setLeadComponent(lbNom);

            return holder;

        } catch (NullPointerException ex) {
            System.out.println(ex.getMessage());
            return new Container(BoxLayout.y());
        }

    }

}
