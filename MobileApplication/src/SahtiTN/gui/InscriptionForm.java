/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.User;
import SahtiTN.services.ServiceUser;
import com.codename1.components.Switch;
import com.codename1.messaging.Message;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;

/**
 *
 * @author LENOVO
 */
public class InscriptionForm extends Form{
    
     public InscriptionForm(Resources theme, Form previous) {
                        super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));

        setUIID("LoginForm");
         Container welcome = FlowLayout.encloseCenter(
                new Label("Inscrivez vous , ", "WelcomeWhite"));
/////////////
        getTitleArea().setUIID("Container");

        TextField Nom = new TextField("", "Nom");
        TextField Prenom = new TextField("", "Prenom");
        TextField Email = new TextField("", "Email");
        TextField Login = new TextField("", "Login");
        TextField Password = new TextField("", "Mot de passe", 20, TextField.PASSWORD);
        TextField RepeatPassword = new TextField("", "Répéter mot de passe", 20, TextField.PASSWORD);
        TextField Adresse = new TextField("", "Adresse");
        TextField Tel = new TextField("", "Telephone");

        Nom.getAllStyles().setMargin(LEFT, 0);
        Prenom.getAllStyles().setMargin(LEFT, 0);
        Email.getAllStyles().setMargin(LEFT, 0);
        Login.getAllStyles().setMargin(LEFT, 0);
        Password.getAllStyles().setMargin(LEFT, 0);
        RepeatPassword.getAllStyles().setMargin(LEFT, 0);
        Adresse.getAllStyles().setMargin(LEFT, 0);
        Tel.getAllStyles().setMargin(LEFT, 0);
        Label loginIcon = new Label("", "TextField");
        Label passwordIcon = new Label("", "TextField");
        loginIcon.getAllStyles().setMargin(RIGHT, 0);
        passwordIcon.getAllStyles().setMargin(RIGHT, 0);
        FontImage.setMaterialIcon(loginIcon, FontImage.MATERIAL_PERSON_OUTLINE, 3);
        FontImage.setMaterialIcon(passwordIcon, FontImage.MATERIAL_LOCK_OUTLINE, 3);

        Container c1 = new Container(BoxLayout.x());
        c1.add(new Label("Femme"));
        Switch Switch = new Switch();
        c1.add(Switch);
        c1.add(new Label("Homme"));

        Button btnValider = new Button("Enregistrer");
        btnValider.setUIID("Connexion");
        Button retour = new Button("retour");
        retour.setUIID("Connexion");
        Container c2 = new Container(BoxLayout.x());
        c2.add(retour);       
        c2.add(btnValider);
        
        
       retour.addActionListener(e -> new LoginForm(theme).show());

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {


                if ((Nom.getText().length() == 0) || (Prenom.getText().length() == 0) || (Login.getText().length() == 0) || (Email.getText().length() == 0) || (Password.getText().length() == 0) || (RepeatPassword.getText().length() == 0)) {
                    Dialog.show("Alert", "Veuillez remplir tous les champs.", new Command("OK"));
                } else if (Email.getText().toString().indexOf("@") == -1) {
                    Dialog.show("Alert", "Veuillez choisir une adresse mail correcte.", new Command("OK"));

                } else if (Tel.getText().length() != 8) {
                    Dialog.show("Alert", "Veuillez saisir un numéro de téléphone correcte.", new Command("OK"));
                  } else if (Password.getText().equals(RepeatPassword.getText())==false) {
                    
Dialog.show("Alert", "les champs mot de passe et repeter mot de passe doivent etre identique .", new Command("OK"));}
                 else {
                    try {
                        String Sexe = new Label("Sexe :").getText();
                        if (Switch.isOn()) {
                            Sexe = "Homme";
                        } else {
                            Sexe = "Femme";
                        }

                        User u = new User(Login.getText(),Password.getText(), Nom.getText(), Prenom.getText(),Adresse.getText(), Tel.getText(), Email.getText(),Sexe,1 );
                       String result=ServiceUser.getInstance().addUser(u);
                        if (result.equals("ok")==true) {
                            Dialog.show("Success", "Ajout effectué.", new Command("OK"));
                           
                    Message m = new Message(" Nos salutations M. MM."+u.getPrenom()+" "+u.getNom()+" .Votre inscription a bien été validé");
                   
                        
                    new LoginForm(theme).show();
                        } else{
                            Dialog.show("ERROR", result , new Command("OK"));
                        }

                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }

                }
            }

        });

        //////  design /////////
        Label spaceLabel;
        if(!Display.getInstance().isTablet() && Display.getInstance().getDeviceDensity() < Display.DENSITY_VERY_HIGH) {
            spaceLabel = new Label();
        } else {
            spaceLabel = new Label(" ");
        }
        
        Container by = BoxLayout.encloseY(
                welcome,
                BorderLayout.center(Nom),
                BorderLayout.center(Prenom),
                BorderLayout.center(Email),
                BorderLayout.center(Login).
                add(BorderLayout.WEST, loginIcon),
                BorderLayout.center(Password).
                add(BorderLayout.WEST, passwordIcon),
                BorderLayout.center(RepeatPassword),
                BorderLayout.center(c1),
                BorderLayout.center(Adresse),
                BorderLayout.center(Tel),
               BorderLayout.center(c2)
        );
        add(BorderLayout.CENTER, by);

        // for low res and landscape devices
        by.setScrollableY(true);
        by.setScrollVisible(false);

    }
    
    
    
    
}
