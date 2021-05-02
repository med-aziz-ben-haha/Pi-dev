/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.User;
import SahtiTN.services.ServiceUser;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;

/**
 *
 * @author LENOVO
 */
public class LoginForm extends Form{
     Form current;
    public LoginForm(Resources theme) {
        super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
        setUIID("LoginForm");
        Container welcome = FlowLayout.encloseCenter(
                new Label("Bienvenue  ", "WelcomeWhite")
    
        );
        
        getTitleArea().setUIID("Container");
        
//        Image profilePic = theme.getImage("user-picture.jpg");
   //     Image mask = theme.getImage("round-mask.png");
     //   profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
    //    Label profilePicLabel = new Label(profilePic, "ProfilePic");
    //    profilePicLabel.setMask(mask.createMask());
        
        TextField login = new TextField("", "login ") ;
        TextField password = new TextField("", "mot de passe", 20, TextField.PASSWORD) ;
        login.getAllStyles().setMargin(LEFT, 0);
        password.getAllStyles().setMargin(LEFT, 0);
        Label loginIcon = new Label("", "TextField");
        Label passwordIcon = new Label("", "TextField");
        loginIcon.getAllStyles().setMargin(RIGHT, 0);
        passwordIcon.getAllStyles().setMargin(RIGHT, 0);
        FontImage.setMaterialIcon(loginIcon, FontImage.MATERIAL_PERSON_OUTLINE, 3);
        FontImage.setMaterialIcon(passwordIcon, FontImage.MATERIAL_LOCK_OUTLINE, 3);
        
        Button loginButton = new Button("                          Se connecter");
        
        loginButton.setUIID("LoginButton");
        loginButton.addActionListener(e -> {
            /* verification compte */
            
            System.out.println(ServiceUser.getInstance().VerifUser(login.getText(), password.getText()).toString());
                   User u = ServiceUser.getInstance().VerifUser(login.getText(), password.getText());
                   System.out.println(u);
                SpanLabel sp = new SpanLabel();
                if (u==null){sp.setText("false");}
                else{if(u.getPassword().equals("faux"))
                {sp.setText("faux");}else{sp.setText("true");}}
                System.out.println(sp.getText());
                
                if (sp.getText().toString() == "true") {
                    //new ProfilForm(theme,theme,login.getText()).show();
                  Form f= new ListCategorieSoinForm(u.getId());
                         f.show();

                } else {
                    Dialog.show("ERROR", "Votre nom d'utilisateur ou mot de passe est erroné !", new Command("OK"));
                    System.out.println("recommencez ");

                } 
              
             
            
            
            /*   fin verification compte    */
            
            /*
            Toolbar.setGlobalToolbar(false);
                    new HomeForm(theme,login.getText()).show();
            Toolbar.setGlobalToolbar(true);*/
        });
        
        Button createNewAccount = new Button("                            Inscription");
        createNewAccount.setUIID("CreateNewAccountButton");
        
        createNewAccount.addActionListener(e -> new InscriptionForm(theme,this).show());

        
        
        
        // We remove the extra space for low resolution devices so things fit better
        Label spaceLabel;
        if(!Display.getInstance().isTablet() && Display.getInstance().getDeviceDensity() < Display.DENSITY_VERY_HIGH) {
            spaceLabel = new Label();
        } else {
            spaceLabel = new Label(" ");
        }
        
        
        Container by = BoxLayout.encloseY(
                welcome,
        //        profilePicLabel,
                spaceLabel,
                BorderLayout.center(login).
                        add(BorderLayout.WEST, loginIcon),
                BorderLayout.center(password).
                        add(BorderLayout.WEST, passwordIcon),
                loginButton,
                createNewAccount
        );
        add(BorderLayout.CENTER, by);
        
        // for low res and landscape devices
        by.setScrollableY(true);
        by.setScrollVisible(false);
    }
    
}
