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
import com.codename1.messaging.msgForm;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Ordonnance;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Ennaifer Khalil
 */
public class ServiceOrdonnance {
    
    
    public ArrayList<Ordonnance> ordonnances;
    public static ServiceOrdonnance instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceOrdonnance() {
         req = new ConnectionRequest();
    }

    public static ServiceOrdonnance getInstance() {
        if (instance == null) {
            instance = new ServiceOrdonnance();
        }
        return instance;
    }
    
    public ArrayList<Ordonnance> afficherOrdonnance(){
        String url = Statics.BASE_URL+"/listordonnanceJSON";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                ordonnances = parseOrdonnance(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return ordonnances;
    }
    
    public ArrayList<Ordonnance> parseOrdonnance(String jsonText){
        try {
            ordonnances=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> ordonnancesListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)ordonnancesListJson.get("root");
            for(Map<String,Object> obj : list){
                
                Ordonnance o = new Ordonnance();
                float id = Float.parseFloat(obj.get("id").toString());
                o.setId((int)id);
                o.setContenu(obj.get("contenu_ord").toString());
                DateFormat format = new SimpleDateFormat("yyyy-MM-dd'T'HH:mm:ss");
                
                try {
                    o.setDateOrdonnance(format.parse(obj.get("date_ord").toString()));
                } catch (ParseException ex) {
                   System.out.println("Data non Affiché");
                }
                ordonnances.add(o);
            }
        } catch (IOException ex) {   
        }
        return ordonnances;
    }

    public boolean ajouterOrdonnance (Ordonnance O) {
        String url=Statics.BASE_URL+"/OrdonnanceajoutJSON/new?contenu_ord="+O.getContenu()+"&id="+O.getListe_medicament(); //création de l'URL
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
    
     public boolean removeOrdonnance(int id){
        String url = Statics.BASE_URL+"/OrdonnanceremoveJSON/"+id;
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
     
    public boolean updateOrdonnance (Ordonnance O) {
        String url=Statics.BASE_URL+"/OrdonnancemodifierJSON/"+O.getId()+"?contenu_ord="+O.getContenu(); //création de l'URL
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
    
        public ArrayList<Ordonnance> rechercheOrdonnance(String Data){
        String url = Statics.BASE_URL+"/rechercheOrdonnanceJSON/"+Data;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                ordonnances = parseOrdonnance(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return ordonnances;
    }
    
    public ArrayList<Ordonnance> trierOrdonnance(){
        String url = Statics.BASE_URL+"/triordonnanceJSON";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                ordonnances = parseOrdonnance(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return ordonnances;
    }
    
     public void sms(){
               NetworkManager.getInstance();
              msgForm m = new msgForm();
          }
  
    
}
