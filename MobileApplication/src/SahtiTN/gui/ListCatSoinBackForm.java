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
import com.codename1.capture.Capture;
import static com.codename1.push.PushContent.setTitle;
import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.io.Log;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
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
import com.codename1.ui.util.ImageIO;
import java.io.ByteArrayOutputStream;
import java.io.IOException;

import java.util.List;

/**
 *
 * @author LENOVO
 */
public class ListCatSoinBackForm extends Form {

    Form current;
    private CategorieSoinService sv;
    List<CategorieSoinMP> cat;
    public ListCatSoinBackForm() {
        current = this;

        sv = new CategorieSoinService();
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());

        setTitle("Liste Categorie SoinMP");
        setLayout(BoxLayout.y());
        Button add = new Button("Ajouter une Categorie SoinMP");
        cat = sv.getAllCatSoins();

        add(add);
        for (int i = 0; i < cat.size(); i++) {
            add(addCatItem(cat.get(i)));
        }
        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

                EncodedImage enc = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(200, 200);

                Image img = URLImage.createToStorage(enc, "http://localhost/public/uploads/categorie-605339359cead.png", "http://localhost/public/uploads/categorie-605339359cead.png");

                ImageViewer image = new ImageViewer(img);
                Label espace = new Label("espace");
                espace.setVisible(false);
                Form f = new Form();
                f.setTitle("Ajouter une Categorie SoinMP");
                f.setLayout(BoxLayout.y());
                Label lbtitre = new Label("Titre:");
                TextArea titre = new TextArea();
                Button b = new Button("Ajouter");
              
                f.addAll(espace, image,  lbtitre, titre, b);
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {
                });
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {
                });
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {
                });
                f.getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {
                    new ListCatSoinBackForm().show();
                });
                f.getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {
                    new ListSoinBackForm().show();
                });
                f.getToolbar().addMaterialCommandToSideMenu(" Statistiques SoinMP", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
                    new StatSoinForm().show();
                });
                f.getToolbar().addMaterialCommandToSideMenu(" Statistiques User", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
                    new StatUserForm().show();
                });
                f.show();

                b.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                        if (titre.getText().length() == 0) {
                            Dialog.show("Alert", "Veuillez remplir tous les champs.", new Command("OK"));
                        } else {
                         

                            CategorieSoinService.getInstance().addCategorieSoin(titre.getText());
                            new ListCatSoinBackForm().show();
                        }
                    }
                });
            }
        });
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {
        });
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {
        });
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {
        });
        getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {
            new ListCatSoinBackForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {
            new ListSoinBackForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu(" Statistiques SoinMP", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
            new StatSoinForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu(" Statistiques User", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
            new StatUserForm().show();
        });

    }

    public Container addCatItem(CategorieSoinMP Categorie) {

        Container holder = new Container(BoxLayout.x());
        Container details = new Container(BoxLayout.y());

        Label lbtitre = new Label(Categorie.getLibelle_categorie_soin_mp());
        Button Edit = new Button("Modifier");
        Button Dell = new Button("Supprimer");
        Container buttons = new Container(BoxLayout.x());
        buttons.addAll(Edit, Dell);
        Label espace = new Label("espace");
        espace.setVisible(false);
        Label espace2 = new Label("espace");
        espace2.setVisible(false);
        details.addAll(lbtitre, buttons, espace2);

        EncodedImage enc = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(200, 200);

        Image img = URLImage.createToStorage(enc, "http://localhost/public/uploads/" + Categorie.getLien_icone_csmp(), "http://localhost/public/uploads/" + Categorie.getLien_icone_csmp());

        ImageViewer image = new ImageViewer(img);

        holder.addAll(image, details);

        Dell.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                CategorieSoinService.getInstance().deleteCategorieSoin(Categorie.getId());
                new ListCatSoinBackForm().showBack();
            }
        });
        Edit.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

                EncodedImage enc = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(200, 200);

                Image img = URLImage.createToStorage(enc, "http://localhost/public/uploads/" + Categorie.getLien_icone_csmp(), "http://localhost/public/uploads/" + Categorie.getLien_icone_csmp());

                ImageViewer image = new ImageViewer(img);
                Label espace = new Label("espace");
                espace.setVisible(false);
                Form f = new Form();
                f.setTitle("Modifier une Categorie SoinMP");
                f.setLayout(BoxLayout.y());
                Label lbtitre = new Label("Titre:");
                TextArea titre = new TextArea(Categorie.getLibelle_categorie_soin_mp());
                Button b = new Button("Modifier");

               
                f.addAll(espace, image, lbtitre, titre, b);
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {
                });
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {
                });
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {
                });
                f.getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {
                    new ListCatSoinBackForm().show();
                });
                f.getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {
                    new ListSoinBackForm().show();
                });
                f.getToolbar().addMaterialCommandToSideMenu(" Statistiques SoinMP", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
                    new StatSoinForm().show();
                });
                f.getToolbar().addMaterialCommandToSideMenu(" Statistiques User", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
                    new StatUserForm().show();
                });
                f.show();

                b.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                          if (titre.getText().length() == 0) {
                            Dialog.show("Alert", "Veuillez remplir tous les champs.", new Command("OK"));
                        } else {
                       
                        CategorieSoinService.getInstance().editCategorieSoin(Categorie.getId(), titre.getText());
                        new ListCatSoinBackForm().show();
                    }}
                });
            }
        });
        return holder;
    }


    
    
}
