/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Ordonnance;
import com.mycompany.myapp.services.ServiceOrdonnance;
import java.util.ArrayList;

/**
 *
 * @author Ennaifer Khalil
 */
public class AfficherOrdonnanceForm extends Form {

    public AfficherOrdonnanceForm() {
    }   
   
    public AfficherOrdonnanceForm(Form previous) {
        setTitle("Liste des Ordonnances");
        setLayout(BoxLayout.y());

        ArrayList<Ordonnance> ordonnances = ServiceOrdonnance.getInstance().afficherOrdonnance();
        for (Ordonnance ord : ordonnances) {
            add(addOrdonnanceHolder(ord));

            Button btnSupp = new Button("Supprimer");
            btnSupp.addActionListener((evt)->{
                if (Dialog.show("Warning", "Voulez-vous vraiment supprimer?", "OUI", "NON")) {
                    try {
                        if (ServiceOrdonnance.getInstance().removeOrdonnance(ord.getId())) {
                            Dialog.show("Success", "Connection accepted", "OK", null);
                        } else {
                            Dialog.show("ERROR", "Server error", "OK", null);
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    new AfficherOrdonnanceForm(previous).show();
                }
            });

            Button btnModif = new Button("Modifier");
            btnModif.addActionListener(e -> new UpdateOrdonnanceForm(previous, ord).show());
            
            Container btHolder = new Container(BoxLayout.x());
            btHolder.addAll(btnSupp, btnModif);
            addAll(btHolder);
        }
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                e -> previous.showBack());
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
