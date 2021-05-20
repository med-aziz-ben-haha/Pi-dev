/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.l10n.ParseException;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import SahtiTN.entities.Ordonnance;
import SahtiTN.entities.User;
import SahtiTN.services.ServiceOrdonnance;
import SahtiTN.tools.Session;
import java.util.ArrayList;

/**
 *
 * @author Ennaifer Khalil
 */
public class RechercherOrdonnanceForm extends Form {
private int iduser;
Form current;
    public RechercherOrdonnanceForm(Form previous,User u) {
        this.iduser = u.getId();
        current=this;
        setLayout(BoxLayout.y());
        this.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
     getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});    
        TextField searchField = new TextField("", "Contenu Consultation");
        searchField.setUIID("searchField");
        this.getToolbar().setTitleComponent(
                FlowLayout.encloseCenterMiddle(
                        searchField
                )
        );
        

        FontImage searchIcon = FontImage.createMaterial(FontImage.MATERIAL_SEARCH, UIManager.getInstance().getComponentStyle(""));
        
        Container contenant = BoxLayout.encloseY();
        AfficherOrdonnance("", contenant);
        searchField.addDataChangeListener((i1, i2) -> {
            String t = searchField.getText();
            if (t.length() < 1) {
                contenant.removeAll();
                AfficherOrdonnance("", contenant);
                contenant.refreshTheme();
            } else {
                contenant.removeAll();
                String search_word = t;
                AfficherOrdonnance(t, contenant);
                contenant.refreshTheme();
            }
            getContentPane().animateLayout(250);
        });
        this.getToolbar().addCommandToRightBar("", searchIcon, e -> {
            searchField.startEditingAsync();
        });
        this.add(contenant);
    }

   
    public void AfficherOrdonnance(String contenu,Container co){
        if (contenu.isEmpty()) 
        {
            ArrayList<Ordonnance> ordonnances = ServiceOrdonnance.getInstance().afficherOrdonnance();
            for (Ordonnance ord : ordonnances) {
                co.add(addOrdonnanceHolder(ord));
            }
        } else {
            ArrayList<Ordonnance> ordonnances = ServiceOrdonnance.getInstance().rechercheOrdonnance(contenu);
            for (Ordonnance ord : ordonnances) {
                co.add(addOrdonnanceHolder(ord));
            }
        }
    }  
    public Container addOrdonnanceHolder(Ordonnance ordonnance) {
        try {
            Container holderLabel = new Container(BoxLayout.y());
            Container Info = new Container(BoxLayout.y());
            Container LabelInfo = new Container(BoxLayout.x());
            Container holder = new Container(BoxLayout.y());

            Label lbContenu = new Label("Contenu :");
            Label lbDate = new Label("Date de saisie :");

            Label Contenu = new Label(ordonnance.getContenu());
            Label Date = new Label(String.valueOf(ordonnance.getDateOrdonnance()));

            holderLabel.addAll(lbContenu, lbDate);
            Info.addAll(Contenu, Date);
            LabelInfo.addAll(holderLabel, Info);
            holder.addAll(LabelInfo);

            holder.setLeadComponent(Contenu);
            return holder;
            
        } catch (NullPointerException ex) {
            System.out.println(ex.getMessage());
            return new Container(BoxLayout.y());
        }
    }
}
