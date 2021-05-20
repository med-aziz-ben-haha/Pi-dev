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
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.ContainerList;
import java.util.List;

/**
 *
 * @author LENOVO
 */
public class ProfilForm extends Form {

    Form current;
    private List list;
    private ContainerList listContainer;
    private int iduser;

    public ProfilForm(User u ,Form previous) {
        current=this;
        this.iduser = u.getId();

        setLayout(BoxLayout.y());
        /*bonus option */

        setTitle("Mon Profil");

        SpanLabel sp = new SpanLabel();

        EncodedImage placeHolder = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(600, 1100);

        String url = "http://localhost/public/uploads/" + u.getLien_image_user();
        Image img = URLImage.createToStorage(placeHolder, url, url);

        ImageViewer image = new ImageViewer(img);
        image.stripMarginAndPadding();
        Container c_nom = new Container(BoxLayout.x());
        c_nom.add(new Label("Nom          :"));
        c_nom.add(new Label(u.getNom()));
        Container c_prenom = new Container(BoxLayout.x());
        c_prenom.add(new Label("Prenom     :"));
        c_prenom.add(new Label(u.getPrenom()));
        Container c_adresse = new Container(BoxLayout.x());
        c_adresse.add(new Label("Adresse     :"));
        c_adresse.add(new Label(u.getAdresse_user()));
        Container c_Tel = new Container(BoxLayout.x());
        c_Tel.add(new Label("Téléphone :"));
        c_Tel.add(new Label(u.getTelephone()));
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
        c2.addAll(lb_espace3,lb_espace2, btnValider, lb_espace4);
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
                new EditUserForm(u,current).show();
            }

        });

        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});
    }

}
