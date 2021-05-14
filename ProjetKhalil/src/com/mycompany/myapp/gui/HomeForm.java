/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author Ennaifer Khalil
 */
public class HomeForm extends Form {

    Form current;
    
    public HomeForm() {
        current = this; //Récupération de l'interface(Form) en cours
        setTitle("Home");
        setLayout(BoxLayout.y());
        
        add(new Label("Choose an option"));
        Button bt_ajouterMedicament = new Button("Ajouter Medicament");
        Button bt_afficherMedicament = new Button("Afficher Medicament");
        Button bt_RechercheMedicament = new Button("Recherche Medicament");
        
        Button bt_ajouterOrdonnance = new Button("Ajouter Ordonnance");
        Button bt_afficherOrdonnance = new Button("Afficher Ordonnance");
        Button bt_RechercheOrdonnance = new Button("Recherche Ordonnance");
        
       
        bt_ajouterMedicament.addActionListener(e -> new AjouterMedicamentForm(current).show());
        bt_afficherMedicament.addActionListener(e -> new AfficherMedicamentForm(current).show());
        bt_RechercheMedicament.addActionListener(e -> new RechercherMedicamentForm(current).show());
        
        bt_ajouterOrdonnance.addActionListener(e -> new AjouterOrdonnanceForm(current).show());
        bt_afficherOrdonnance.addActionListener(e -> new AfficherOrdonnanceForm(current).show());
        bt_RechercheOrdonnance.addActionListener(e -> new RechercherOrdonnanceForm(current).show());
        
        addAll(bt_ajouterMedicament, bt_afficherMedicament, bt_RechercheMedicament, bt_ajouterOrdonnance,bt_afficherOrdonnance ,bt_RechercheOrdonnance);

    }

}