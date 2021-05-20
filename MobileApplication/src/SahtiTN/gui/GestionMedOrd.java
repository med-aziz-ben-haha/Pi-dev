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
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;

/**
 *
 * @author Ennaifer Khalil
 */
public class GestionMedOrd extends Form {

    Form current;
    
    public GestionMedOrd(Form previous, User u) {
        current = this; //Récupération de l'interface(Form) en cours
        //setTitle("Home");
        setLayout(BoxLayout.y());
        this.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
         getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();}); 
        add(new Label("Choose an option"));
        Button bt_ajouterMedicament = new Button("Ajouter Medicament");
        Button bt_afficherMedicament = new Button("Afficher Medicament");
        Button bt_ajouterOrdonnance = new Button("Ajouter Ordonnance");
        Button bt_afficherOrdonnance = new Button("Afficher Ordonnance");

        Button bt_RechercheMedicament = new Button("Recherche Medicament");
        Button bt_RechercheOrdonnance = new Button("Recherche Ordonnance");

        bt_ajouterMedicament.addActionListener(e -> new AjouterMedicamentForm(current,u).show());
        bt_afficherMedicament.addActionListener(e -> new AfficherMedicamentForm(current,u).show());
        bt_ajouterOrdonnance.addActionListener(e -> new AjouterOrdonnanceForm(current,u).show());
        bt_afficherOrdonnance.addActionListener(e -> new AfficherOrdonnanceForm(current,u).show());
        
        bt_RechercheMedicament.addActionListener(e -> new RechercherMedicamentForm(current,u).show());
        bt_RechercheOrdonnance.addActionListener(e -> new RechercherOrdonnanceForm(current,u).show());

        if(u.getRole()==2){
        setTitle("Espace Medecin");
        
        addAll( bt_ajouterOrdonnance,bt_afficherOrdonnance );}
        if(u.getRole()==3){
        setTitle("Espace Pharmacien");
        addAll(bt_ajouterMedicament, bt_afficherMedicament);}
 
    }

}