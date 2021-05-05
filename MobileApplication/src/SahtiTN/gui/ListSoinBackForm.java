/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;


import SahtiTN.MyApplication;
import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.entities.SoinMP;
import SahtiTN.services.CategorieSoinService;
import SahtiTN.services.SoinService;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
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
import java.util.List;


/**
 *
 * @author LENOVO
 */
public class ListSoinBackForm extends Form{
    Form current;
    private SoinService sv;
    List<SoinMP> Soin;
      List<CategorieSoinMP> cat;
    private CategorieSoinService svCat;
    ComboBox<CategorieSoinMP> ComboCat;
    
    public ListSoinBackForm() {
        current = this;
        sv = new SoinService();
        svCat = new CategorieSoinService();
         cat=svCat.getAllCatSoins();
       
        setTitle("Liste des SoinMP");
        setLayout(BoxLayout.y());
        Button add = new Button("Ajouter un SoinMP");
         Soin = sv.getAllSoinsBack();
         
        add(add);
        for (int i = 0; i < Soin.size(); i++) {
            add(addCatItem(Soin.get(i)));
        }
        add.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                EncodedImage enc = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false);

                Image img = URLImage.createToStorage(enc, "http://localhost/public/uploads/2.4Méditation-603aee9ce4bff.jpeg", "http://localhost/public/uploads/2.4Méditation-603aee9ce4bff.jpeg");

                ImageViewer image = new ImageViewer(img);
                ComboCat=new ComboBox();
                Label lbCat = new Label ("Categorie SoinMP :");
                for (CategorieSoinMP a : cat ){ComboCat.addItem(a);}
                Label espace = new Label("espace");
                espace.setVisible(false);
                Form f = new Form();
                f.setTitle("Ajouter un SoinMP");
                f.setLayout(BoxLayout.y());
                Label lbtitre = new Label("Titre:");
                TextArea titre = new TextArea();
                Label lbdescription = new Label("Description:");
                TextArea description = new TextArea();
                Label lbadresse = new Label("Adresse:");
                TextArea adresse = new TextArea();
                Button b = new Button("Ajouter");
                f.addAll(espace, image, lbtitre, titre,lbCat,ComboCat,lbdescription,description,lbadresse,adresse, b);
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
                f.getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {new ListCatSoinBackForm().show();});
                f.getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {new ListSoinBackForm().show();});
                f.show();
                b.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                         if ((titre.getText().length() == 0) || (description.getText().length() == 0) || (adresse.getText().length()== 0)) {
                    Dialog.show("Alert", "Veuillez remplir tous les champs.", new Command("OK"));
                }
                         else{     SoinService.getInstance().addSoin(titre.getText(),description.getText(),adresse.getText(),ComboCat.getSelectedItem().getId());
                        new ListSoinBackForm().show();}                        
                    }
                });
            }
        });
         getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
         getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
         getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
         getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {new ListCatSoinBackForm().show();});
         getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {new ListSoinBackForm().show();});

    }

    public Container addCatItem(SoinMP Soin) {

        Container holder = new Container(BoxLayout.x());
        Container details = new Container(BoxLayout.y());
        SpanLabel lbdescription = new SpanLabel(Soin.getDescription_soin_mp());
        SpanLabel lbadresse = new SpanLabel(Soin.getAdresse_soin_mp());
        SpanLabel lbtitre = new SpanLabel(Soin.getTitre_soin_mp());
        Button Edit = new Button("Modifier");
        Button Dell = new Button("Supprimer");
        Container buttons = new Container(BoxLayout.x());
        buttons.addAll(Edit, Dell);
        Label espace = new Label("espace");
        espace.setVisible(false);
        Label espace2 = new Label("espace");
        espace2.setVisible(false);
        details.addAll(lbtitre,lbdescription,lbadresse, buttons, espace2);
       
        EncodedImage enc = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false).scaledEncoded(200, 200);

        Image img = URLImage.createToStorage(enc, "http://localhost/public/uploads/" + Soin.getLien_image_smp(), "http://localhost/public/uploads/" + Soin.getLien_image_smp());

        ImageViewer image = new ImageViewer(img);

        holder.addAll(image, details);

        Dell.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
               SoinService.getInstance().deleteSoin(Soin.getId());
               new ListSoinBackForm().showBack();
            }
        });
        Edit.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                 
                        EncodedImage enc = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false);

                Image img = URLImage.createToStorage(enc, "http://localhost/public/uploads/"+Soin.getLien_image_smp(), "http://localhost/public/uploads/"+Soin.getLien_image_smp());

                ImageViewer image = new ImageViewer(img);
                ComboCat=new ComboBox();
                Label lbCat = new Label ("Categorie SoinMP :");
                for (CategorieSoinMP a : cat ){ComboCat.addItem(a);}
                Label espace = new Label("espace");
                espace.setVisible(false);
                Form f = new Form();
                f.setTitle("Modifier une Categorie SoinMP");
                f.setLayout(BoxLayout.y());
                  Label lbtitre = new Label("Titre:");
                TextArea titre = new TextArea(Soin.getTitre_soin_mp());
                Label lbdescription = new Label("Description:");
                TextArea description = new TextArea(Soin.getDescription_soin_mp());
                Label lbadresse = new Label("Adresse:");
                TextArea adresse = new TextArea(Soin.getAdresse_soin_mp());
                Button b = new Button("Modifier");
                f.addAll(espace, image, lbtitre, titre,lbCat,ComboCat,lbdescription,description,lbadresse,adresse, b);
                 f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
                f.getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
                f.getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {new ListCatSoinBackForm().show();});
                f.getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {new ListSoinBackForm().show();});
                f.show();
                b.addActionListener(new ActionListener() {
                    @Override
                        public void actionPerformed(ActionEvent evt) {
                         if ((titre.getText().length() == 0) || (description.getText().length() == 0) || (adresse.getText().length()== 0)) {
                    Dialog.show("Alert", "Veuillez remplir tous les champs.", new Command("OK"));
                }
                         else{     SoinService.getInstance().updateSoin(Soin.getId(),titre.getText(),description.getText(),adresse.getText(),ComboCat.getSelectedItem().getId());
                        new ListSoinBackForm().show();}                         
                    }
                });
            }
        });
        return holder;
    }

}

