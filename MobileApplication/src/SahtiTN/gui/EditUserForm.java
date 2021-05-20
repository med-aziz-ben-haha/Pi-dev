/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.User;
import SahtiTN.services.ServiceUser;
import SahtiTN.tools.Session;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author LENOVO
 */
public class EditUserForm extends Form {
Form current;
    public EditUserForm(User u,Form previous ) {
          setTitle("Profile");
        setLayout(BoxLayout.y());
        /*bonus option */
        current=this;
        setTitle("Mes informations");

        SpanLabel sp = new SpanLabel();
      
EncodedImage placeHolder = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(600, 1100);

        String url = "http://localhost/public/uploads/" + u.getLien_image_user();
        Image img = URLImage.createToStorage(placeHolder, url, url);
        Container c_nom = new Container(BoxLayout.x());
        c_nom.add(new Label("Nom          :"));
        TextArea nom=new TextArea(u.getNom());
        c_nom.add(nom);
        Container c_prenom = new Container(BoxLayout.x());
        c_prenom.add(new Label("Prenom     :"));
        TextArea prenom=new TextArea(u.getPrenom());
        c_prenom.add(prenom);
        Container c_adresse = new Container(BoxLayout.x());
        c_adresse.add(new Label("Adresse     :"));
        TextArea adresse=new TextArea(u.getAdresse_user());
        c_adresse.add(adresse);
        Container c_Tel = new Container(BoxLayout.x());
        c_Tel.add(new Label("Téléphone :"));
         TextArea tel=new TextArea(u.getTelephone());
        c_Tel.add(tel);
         Label lb_espace = new Label("espace");
        lb_espace.setVisible(false);
        Label lb_espace1 = new Label("espace");
        lb_espace1.setVisible(false);
        Label lb_espace2 = new Label("espa");
        lb_espace2.setVisible(false);
         Label lb_espace3 = new Label("espace");
        lb_espace3.setVisible(false);
        Label lb_espace4 = new Label("espace");
        lb_espace4.setVisible(false);
        Button btnValider = new Button("    Modifier    ");
        Container c2 = new Container(BoxLayout.x());
        c2.addAll(lb_espace3,lb_espace2,btnValider,lb_espace4);
        add(img);
        add(lb_espace);
        add(c_nom);
        add(c_prenom);
        add(c_adresse);
        add(c_Tel);
        add(lb_espace1);
        add(c2);
       
  
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                      u.setNom(nom.getText());
                      u.setPrenom(prenom.getText());
                      u.setAdresse_user(adresse.getText());
                      u.setTelephone(tel.getText());
                 ServiceUser.getInstance().updateUser(u);
                 new ProfilForm(u,current).show();
            }

             

            });
        
        

        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
      getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});
    }
    
}
