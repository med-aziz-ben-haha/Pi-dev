/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.entities.User;
import SahtiTN.services.CategorieSoinService;
import SahtiTN.tools.Session;
import com.codename1.components.ImageViewer;
import static com.codename1.push.PushContent.setTitle;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.ContainerList;
import java.util.List;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;

/**
 *
 * @author LENOVO
 */
public class ListCategorieSoinForm extends Form {

    Form current;
    private List list;
    private ContainerList listContainer;
    private int iduser;

    public ListCategorieSoinForm(User u, Form previous) {
        current=this;
        this.iduser = u.getId();
        setTitle("Liste CategorieSoin     ");
        System.out.println("user" + this.iduser);
        // SpanLabel sp = new SpanLabel();
        listContainer = GetCategorieSoin(u);
        listContainer.setLayout(BoxLayout.yCenter());
        listContainer.setScrollableY(false);
        listContainer.setScrollVisible(true);

        //sp.setText(ServiceIngredient.getInstance().getAllIngredients().toString());
        add(listContainer);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
       getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});
    }

    public ContainerList GetCategorieSoin(User u) {

        ContainerList list2 = new ContainerList();
        CategorieSoinService categorie = new CategorieSoinService();
        for (CategorieSoinMP c : categorie.getAllCatSoins()) {

            Container container = new Container(BoxLayout.y());
            Container c_titre = new Container(BoxLayout.x());
            c_titre.add(new Label("   "));

            c_titre.add(new Label("titre :"));
            c_titre.add(new Label(c.getLibelle_categorie_soin_mp()));
            Container c_id = new Container(BoxLayout.x());
            c_id.add(new Label("id :"));
            c_id.add(new Label(Integer.toString(c.getId())));

            c_id.setVisible(false);

            Container espace = new Container(BoxLayout.x());
            espace.add(new Label("id :"));
            espace.add(new Label(Integer.toString(c.getId())));
            espace.setVisible(false);

            EncodedImage placeHolder = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(400, 300);

            String url = "http://localhost/public/uploads/" + c.getLien_icone_csmp();
            Image img = URLImage.createToStorage(placeHolder, url, url);

            ImageViewer image = new ImageViewer(img);
            image.stripMarginAndPadding();

            Button bouton = new Button("   Consulter ");
            container.addAll(image, c_titre, bouton, espace);

            list2.add(container);
            bouton.addActionListener(new ActionListener() {

                @Override
                public void actionPerformed(ActionEvent evt) {
                    new ListSoinForm(c.getId(), u,current).show();

                }

            });

        };
        return list2;

    }

}
