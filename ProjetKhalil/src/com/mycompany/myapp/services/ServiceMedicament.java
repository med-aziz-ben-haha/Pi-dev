/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Medicament;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Ennaifer Khalil
 */
public class ServiceMedicament {
    
        
    public ArrayList<Medicament> medicaments;
    public static ServiceMedicament instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceMedicament() {
         req = new ConnectionRequest();
    }

    public static ServiceMedicament getInstance() {
        if (instance == null) {
            instance = new ServiceMedicament();
        }
        return instance;
    }
    
    public ArrayList<Medicament> afficherMedicament(){
        String url = Statics.BASE_URL+"/listmedicamentJSON";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                medicaments = parseMedicament(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return medicaments;
    }
    
    public ArrayList<Medicament> parseMedicament(String jsonText){
        try {
            medicaments=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> medicamentsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)medicamentsListJson.get("root");
            for(Map<String,Object> obj : list){
                
                Medicament m = new Medicament();
                float id = Float.parseFloat(obj.get("id").toString());
                m.setId((int)id);
                m.setNom_medicament(obj.get("nomMedicament").toString());
                m.setDescmedicament(obj.get("descmedicament").toString());
                float Dispo = Float.parseFloat(obj.get("dispo").toString());
                m.setDispo((int)Dispo);
                DateFormat format = new SimpleDateFormat("yyyy-MM-dd'T'HH:mm:ss");
             
                try {
                    m.setDate_modif(format.parse(obj.get("dateModif").toString()));
                } catch (ParseException ex) {
                   System.out.println("Data non Affiché");
                }
                m.setImg_medicament(obj.get("img_medicament").toString());
                medicaments.add(m);
            }
        } catch (IOException ex) { 
        }
        return medicaments;
    }

    public boolean ajouterMedicament (Medicament m) {
        String url=Statics.BASE_URL+"/MedicamentajoutJSON/new?nomMedicament="+m.getNom_medicament()+"&descmedicament="+m.getDescmedicament()+"&dispo="+m.getDispo()+"&img_medicament="+m.getImg_medicament(); //création de l'URL
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200;
                //req.removeResponseListener(this);   
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean removeMedicament(int id){
        String url = Statics.BASE_URL+"/MedicamentremoveJSON/"+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                //req.removeResponseListener(this);
                req.removeResponseCodeListener(this);
            }          
        });
        NetworkManager.getInstance().addToQueue(req);
        return resultOK;
    }
    
    public boolean updateMedicament (Medicament m) {
        String url=Statics.BASE_URL+"/MedicamentmodifierJSON/"+m.getId()+"?nomMedicament="+m.getNom_medicament()+"&descmedicament="+m.getDescmedicament()+"&dispo="+m.getDispo(); //création de l'URL
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200;
                req.removeResponseListener(this);   
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
    
        public ArrayList<Medicament> rechercheOrdonnance(String Data){
        String url = Statics.BASE_URL+"/rechercheMedicamentJSON/"+Data;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                medicaments = parseMedicament(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return medicaments;
    }

}
