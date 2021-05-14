/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import static com.codename1.push.PushContent.setTitle;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import SahtiTN.entities.Reclamation;
import SahtiTN.entities.User;
import SahtiTN.services.serviceReclamation;

/**
 *
 * @author eya
 */
public class AddReclamationForm extends Form {
   Form current;
   public AddReclamationForm(Form previous,User u) {
     current=this;
       
               getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new HomePageForm(u).showBack());
                  getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
                          getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());

        setTitle("Ajouter une réclamation ");
        setLayout(BoxLayout.y());

        TextField rec = new TextField("", "veillez entrer votre réclamation");
        rec.setUIID("TextFieldBlack");
        addStringValue("Réclamation ", rec);

        Button btnAjouter = new Button("Envoyer");
        addStringValue("", btnAjouter);
        
        btnAjouter.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((rec.getText().length() == 0)) {
                    Dialog.show("Alerte", "Veillez remplir les champs", new Command("OK"));
                } else {
                    try {
                        Reclamation t = new Reclamation(rec.getText());
                        if (serviceReclamation.getInstance().addReclamation(t)) {
                            Dialog.show("Success", "Envoyé ", new Command("OK"));
                        } else {
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }

                }

            }
        });


        // Revenir vers l'interface précédente

    }

    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s, "PaddedLabel")).add(BorderLayout.CENTER, v));
    }

}
