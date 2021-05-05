/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.NoteSoin;
import SahtiTN.entities.SoinMP;
import SahtiTN.entities.User;
import SahtiTN.services.SoinService;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Slider;
import com.codename1.ui.TextArea;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.list.ContainerList;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import static java.lang.Math.round;
import java.util.List;

/**
 *
 * @author LENOVO
 */
public class ListSoinForm extends Form {

    Form current;
    private List list;
    private ContainerList listContainer;
    private int iduser;

    public ListSoinForm(int id,User u) {
        this.iduser = u.getId();
        setTitle("Liste Soins      ");
        // SpanLabel sp = new SpanLabel();
        listContainer = GetSoins(id,u);
        listContainer.setLayout(BoxLayout.y());
        listContainer.setScrollableY(false);
        listContainer.setScrollVisible(true);

        //sp.setText(ServiceIngredient.getInstance().getAllIngredients().toString());
        add(listContainer);

        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new ListCategorieSoinForm(u).showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u).show());
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());
    

    }

    private void initStarRankStyle(Style s, Image star) {
        s.setBackgroundType(Style.BACKGROUND_IMAGE_TILE_BOTH);
        s.setBorder(Border.createEmpty());
        s.setBgImage(star);
        s.setBgTransparency(0);
    }

    private Slider createStarRankSlider(float moyenne) {
        Slider starRank = new Slider();
        starRank.setEditable(false);
        starRank.setMinValue(0);
        starRank.setMaxValue(10);

        Font fnt = Font.createTrueTypeFont("native:MainLight", "native:MainLight").
                derive(Display.getInstance().convertToPixels(5, true), Font.STYLE_PLAIN);
        Style s = new Style(0xffff33, 0, fnt, (byte) 0);
        Image fullStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
        s.setOpacity(100);
        s.setFgColor(0);
        Image emptyStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
        initStarRankStyle(starRank.getSliderEmptySelectedStyle(), emptyStar);
        initStarRankStyle(starRank.getSliderEmptyUnselectedStyle(), emptyStar);
        initStarRankStyle(starRank.getSliderFullSelectedStyle(), fullStar);
        initStarRankStyle(starRank.getSliderFullUnselectedStyle(), fullStar);
        starRank.setPreferredSize(new Dimension(fullStar.getWidth() * 5, fullStar.getHeight()));

        starRank.setProgress(round(moyenne * 2));

        return starRank;
    }

    private Slider createStarRankSliderUser(float valeur) {
        Slider starRank = new Slider();
        starRank.setEditable(true);
        starRank.setMinValue(0);
        starRank.setMaxValue(10);

        Font fnt = Font.createTrueTypeFont("native:MainLight", "native:MainLight").
                derive(Display.getInstance().convertToPixels(5, true), Font.STYLE_PLAIN);
        Style s = new Style(0xffff33, 0, fnt, (byte) 0);
        Image fullStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
        s.setOpacity(100);
        s.setFgColor(0);
        Image emptyStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
        initStarRankStyle(starRank.getSliderEmptySelectedStyle(), emptyStar);
        initStarRankStyle(starRank.getSliderEmptyUnselectedStyle(), emptyStar);
        initStarRankStyle(starRank.getSliderFullSelectedStyle(), fullStar);
        initStarRankStyle(starRank.getSliderFullUnselectedStyle(), fullStar);
        starRank.setPreferredSize(new Dimension(fullStar.getWidth() * 5, fullStar.getHeight()));

        starRank.setProgress(round(valeur * 2));

        return starRank;
    }

    public ContainerList GetSoins(int id,User u) {

        ContainerList list2 = new ContainerList();
        SoinService soins = new SoinService();

        for (SoinMP a : soins.getAllSoins(id, iduser)) {

            Container container = new Container(BoxLayout.y());
            Container c_titre = new Container(BoxLayout.x());
            c_titre.add(new Label("Titre:             "));
            c_titre.add(new SpanLabel(a.getTitre_soin_mp()));

            Container c_description = new Container(BoxLayout.x());
            c_description.add(new Label("Description:"));
            c_description.add(new SpanLabel(a.getDescription_soin_mp()));

            Container c_adresse = new Container(BoxLayout.x());
            c_adresse.add(new Label("Adresse:      "));
            c_adresse.add(new SpanLabel(a.getAdresse_soin_mp()));

            Container c_id = new Container(BoxLayout.x());
            c_id.add(new Label("id :"));
            c_id.add(new Label(Integer.toString(a.getId())));
            c_id.setVisible(false);

            Container espace = new Container(BoxLayout.x());
            espace.add(new Label("id :"));
            espace.add(new Label(Integer.toString(a.getId())));
            espace.setVisible(false);

            Container espaceimg = new Container(BoxLayout.x());
            espaceimg.add(new Label("id :"));
            espaceimg.add(new Label(Integer.toString(a.getId())));
            espaceimg.setVisible(false);

            EncodedImage placeHolder = EncodedImage.createFromImage(MyApplication.theme.getImage("placeholder-image.png"), false);

            String url = "http://localhost/public/uploads/" + a.getLien_image_smp();
            Image img = URLImage.createToStorage(placeHolder, url, url);
            ImageViewer image = new ImageViewer(img);

            Button boutonNote = new Button("Noter");

            boutonNote.addActionListener(new ActionListener() {

                @Override
                public void actionPerformed(ActionEvent evt) {
                    Form f = new Form(BoxLayout.y());
                    Slider Rate = createStarRankSliderUser(a.getValeur());
                    Label lb = new Label("Donnez votre avis :");
                    TextArea avis = new TextArea();

                    avis.setText(a.getAvis());
                    f.addAll(Rate, lb, avis);
                    Dialog d = new Dialog();
                    
                    d.show("Noter", f, new Command("ok"));

                    
                   NoteSoin notes = new NoteSoin();
                    if (avis.getText().equals("")) {
                        avis.setText("null");
                    }
                    notes.setValeur(Rate.getProgress() / 2);
                    notes.setAvis(avis.getText());

                    SoinService.getInstance().addNote(notes, iduser, a.getId());
                 
                    f.refreshTheme();
                    new ListSoinForm(id, u).showBack();
                   
                    /*Command[] cmds = new Command[2];
                    cmds[0] = new Command("OK") {
                        public void actionPerformed(ActionEvent evt) {
                     
                        }
                    };
                    cmds[1] = new Command("Annuler") {
                        public void actionPerformed(ActionEvent evt) {
                            //do Option2
                        }
                    };*/
                   

    
                    

                }

            });

            container.addAll(FlowLayout.encloseCenter(createStarRankSlider(a.getMoyenne())), image, c_titre, c_description, c_adresse, c_id, boutonNote, espace);

            list2.add(container);

        }
        return list2;
    }
}
