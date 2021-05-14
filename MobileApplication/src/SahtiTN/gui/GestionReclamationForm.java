/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author bhk
 */
public class GestionReclamationForm extends Form {

    Form current;
    /*Garder traçe de la Form en cours pour la passer en paramètres 
    aux interfaces suivantes pour pouvoir y revenir plus tard en utilisant
    la méthode showBack*/
    
    public GestionReclamationForm() {
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Gestion Réclamation");
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new HomePageBackForm().showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());
                
        setLayout(BoxLayout.y());

        add(new Label("Choisir une option"));
        Button btnAddType = new Button("Ajouter un Type");
        Button btnListTypes = new Button("La liste des types"); 
        Button btntrie = new Button("Trier la liste des types ");
        Button btnListR = new Button("La liste des réclamations");
        Button btnmail = new Button("Envoyer un email");
     

        btntrie.addActionListener(e -> new ListTypeFormTri(current).show());
        btnmail.addActionListener(e -> new Addmail(current).show());
        btnAddType.addActionListener(e -> new AddTypeForm(current).show());
        btnListTypes.addActionListener(e -> new ListTypeForm(current).show());
       
        btnListR.addActionListener(e -> new ListReclamationForm(current).show());
        addAll(btnAddType, btnListTypes, btnListR,btnmail,btntrie);

    }

}