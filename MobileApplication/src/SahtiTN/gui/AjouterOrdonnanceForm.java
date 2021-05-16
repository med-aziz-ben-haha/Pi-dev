/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.TextField;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Label;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.list.DefaultListModel;
import com.codename1.ui.list.MultiList;
import com.codename1.ui.spinner.Picker;
import SahtiTN.entities.Medicament;
import SahtiTN.entities.Ordonnance;
import SahtiTN.entities.User;
import SahtiTN.services.ServiceMedicament;
import SahtiTN.services.ServiceOrdonnance;
import java.util.ArrayList;
import java.util.Date;

/**
 *
 * @author Ennaifer Khalil
 */
public class AjouterOrdonnanceForm extends Form {

    private int iduser;
    Form current;

    public AjouterOrdonnanceForm(Form previous, User u) {
        this.iduser = u.getId();
        current = this;
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u, current).show());
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());
        setTitle("Ajouter Nouvelle Ordonnance");
        setLayout(BoxLayout.y());

        TextField tf_Contenu = new TextField("", "Contenu");
        Picker tf_Date = new Picker();

        Label lb1 = new Label("Liste des médicaments");
        ArrayList<Medicament> medicaments = ServiceMedicament.getInstance().afficherMedicament();
        DefaultListModel<Medicament> model = new DefaultListModel();
        MultiList ml = new MultiList(model);
        for (Medicament med : medicaments) {
            ml.addItem(med);
        }
        Button btnEnvoie = new Button("Envoyer un mail");
        btnEnvoie.addActionListener(e -> ServiceOrdonnance.getInstance().sms());

        Button btnValider = new Button("Ajouter Ordonnance");
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (Validatefields()) {
                    try {
                        Ordonnance o = new Ordonnance();
                        String Contenu = tf_Contenu.getText();
                        Date Date_ord = (Date) tf_Date.getDate();
                        Medicament Med = (Medicament) ml.getSelectedItem();
                       

                        o.setContenu(Contenu);
                        o.setDateOrdonnance(Date_ord);
                        o.setListe_medicament(Med.getId());

                        if (ServiceOrdonnance.getInstance().ajouterOrdonnance(o)) {
                            Dialog.show("Success", "Connection accepted", new Command("OK"));
                        } else {
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    new AfficherOrdonnanceForm(previous, u).show();
                }
            }

            private boolean Validatefields() {
                boolean verif = true;
                if (tf_Contenu.getText().isEmpty()) {
                    Dialog.show("Alert", "Veuillez remplir le Contenu de l'Ordonnance", new Command("OK"));
                    verif = false;
                }
                return verif;
            }
        }
        );

        //*****************************************************************************************
        // AJOUT PATIENT
        /*
        ArrayList<User> patient = ServiceMedicament.getInstance().afficherMedicament();
        ComboBox <String> combo = new ComboBox();
                for (Medicament med : medecins){
                     combo.addItem(med.getNom_medicament());
                }
         */
        //****************************************************************************************
        addAll(tf_Contenu, tf_Date, lb1, ml, btnEnvoie, btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                e -> previous.showBack());
    }

}
