/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Medicament;
import com.mycompany.myapp.services.ServiceMedicament;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author Ennaifer Khalil
 */
public class RechercherMedicamentForm extends Form {
    
    private EncodedImage placeHolder;
    private Resources theme;


    public RechercherMedicamentForm(Form previous) {
        setLayout(BoxLayout.y());
        this.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
        
        TextField searchField = new TextField("", "Entrez le Nom ou la Description");
        this.getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        searchField
                )
        );
        
        Style st = UIManager.getInstance().getComponentStyle("Title");
        FontImage searchIcon = FontImage.createMaterial(FontImage.MATERIAL_SEARCH, st);
        
        Container contenant = BoxLayout.encloseY();
        AfficherMedicament("", contenant);
        searchField.addDataChangeListener((i1, i2) -> {
            String t = searchField.getText();
            if (t.length() < 1) {
                contenant.removeAll();
                AfficherMedicament("", contenant);
                contenant.refreshTheme();
            } else {
                contenant.removeAll();
                String search_word = t;
                AfficherMedicament(t, contenant);
                contenant.refreshTheme();
            }
            getContentPane().animateLayout(250);
        });
        this.getToolbar().addCommandToRightBar("", searchIcon, e -> {
            searchField.startEditingAsync();
        });
        this.add(contenant);
        
    }
    public void AfficherMedicament(String contenu,Container co){
        if (contenu.isEmpty()) 
        {
            ArrayList<Medicament> medicaments = ServiceMedicament.getInstance().afficherMedicament();
        for (Medicament med : medicaments) {
            co.add(addMedicamentHolder(med));
            }
        } else {
            ArrayList<Medicament> medicaments = ServiceMedicament.getInstance().rechercheOrdonnance(contenu);
            for (Medicament med : medicaments) {
                co.add(addMedicamentHolder(med));
            }
        }
    }
    
    private Image getImageFromServer(String image) {
        try {
        placeHolder = EncodedImage.create("/Cadre.png");
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
        String url = "http://localhost/PIJAVA/uploads/"+image;
        Image img = URLImage.createToStorage(placeHolder, url, url, URLImage.RESIZE_SCALE);

        return img;
    }
    
    public Container addMedicamentHolder(Medicament medicament) {

        try {
            Container holderLabel = new Container(BoxLayout.y());
            Container Info = new Container(BoxLayout.y());
            Container LabelInfo = new Container(BoxLayout.x());
            Container holder = new Container(BoxLayout.y());

            Label lbNom = new Label("Nom :");
            Label lbDesc = new Label("Description :");
            Label lbDispo = new Label("Disponibilité :");
            Label lbDate = new Label("Date de modification :");
            
            Label Nom = new Label(medicament.getNom_medicament());
            Label Desc = new Label(String.valueOf(medicament.getDescmedicament()));
            Label Dispo = new Label(String.valueOf(medicament.getDispo()));
            Label Date = new Label(String.valueOf(medicament.getDate_modif()));
            
            ImageViewer imavu;
            try {
                imavu = new ImageViewer(getImageFromServer(medicament.getImg_medicament()));
            }
            catch(Exception e) {
                System.out.println(medicament.getImg_medicament());
                imavu = new ImageViewer(theme.getImage("Cadre.png"));
            }
            
            Info.addAll(Nom,Desc,Dispo,Date);
            holderLabel.addAll(lbNom,lbDesc,lbDispo,lbDate);
            LabelInfo.addAll(holderLabel,Info);
            holder.addAll(LabelInfo,imavu);

            holder.setLeadComponent(lbNom);
            return holder;

        } catch (NullPointerException ex) {
            System.out.println(ex.getMessage());
            return new Container(BoxLayout.y());
        }

    }
    
    
}
