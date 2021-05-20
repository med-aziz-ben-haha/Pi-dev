/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.User;
import SahtiTN.tools.Session;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.ContainerList;
import java.util.List;

/**
 *
 * @author LENOVO
 */
public class HomePageForm extends Form {

    Form current;
    private List list;
    private int iduser;
    private ContainerList listContainer;

    public HomePageForm(User u) {
        super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
        this.iduser = u.getId();
        setTitle("Accueil      ");
        current = this;
        Label lb_espace = new Label("espace");
        lb_espace.setVisible(false);
        Label lb_espace1 = new Label("espace");
        lb_espace1.setVisible(false);
        Label lb_espace2 = new Label("espace");
        lb_espace2.setVisible(false);

        Button soins = new Button("     Consulter SoinMP     ");
        soins.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
                new ListCategorieSoinForm(u, current).show();
            }
        });
        Button reclamations = new Button("     Réclamer     ");
        reclamations.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
                new AddReclamationForm(current, u).show();
            }
        });
        Button Consulterrec = new Button("     Consulter Réclamation     ");

        Consulterrec.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
                new ListReclamationFrontForm(current, u).show();
            }
        });
           Button Article = new Button("     Consulter Article     ");

        Article.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
                      new article_list("front").show();
            }
        });
                
         Button bt_RechercheMedicament = new Button("     Consulter Medicament     ");
        Button bt_RechercheOrdonnance = new Button("     Consulter Ordonnance     ");
        bt_RechercheMedicament.addActionListener(e -> new RechercherMedicamentForm(current,u).show());
        bt_RechercheOrdonnance.addActionListener(e -> new RechercherOrdonnanceForm(current,u).show());
        
        Container holder = new Container(BoxLayout.y());
        holder.addAll(soins, reclamations, Consulterrec,Article,bt_RechercheMedicament,bt_RechercheOrdonnance);
        Button phar = new Button("     Gérer Médicament      ");
        phar.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
                new GestionMedOrd(current, u).show();
            }
        });
        Button med = new Button("     Gérer Ordonnace      ");
        med.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
                new GestionMedOrd(current, u).show();
            }
        });
        Button para = new Button("     Gérer ParaPharmacie      ");
        if (u.getRole() == 2) {
                    setTitle("Espace Medecin");

            holder.add(med);
        }
        if (u.getRole() == 3) {
                    setTitle("Espace Pharmacien");

            holder.add(phar);
        }
        if (u.getRole() == 4) {
        setTitle("Espace ParaPharmacien");

            holder.add(para);
        }

        listContainer = new ContainerList();
        listContainer.setLayout(BoxLayout.yCenter());
        listContainer.setScrollableY(false);
        listContainer.setScrollVisible(true);

        listContainer.addAll(holder);
        add(BorderLayout.CENTER, listContainer);

        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u, current).show());
   getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});

    }
}
