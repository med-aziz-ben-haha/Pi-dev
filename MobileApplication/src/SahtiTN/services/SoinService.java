/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.NoteSoin;
import SahtiTN.entities.SoinMP;
import SahtiTN.tools.Statics;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author LENOVO
 */
public class SoinService {
        public ArrayList<SoinMP> soins;
        public ArrayList<NoteSoin> notesoins;
        NoteSoin n = new NoteSoin();
    public static SoinService instance ;
    //private ConnectionRequest req ;
    
    /*public AideService()
    { req = new ConnectionRequest();
    }*/
    
    public boolean resultOK;
 
     public static SoinService getInstance() {
        if (instance == null) {
            instance = new SoinService();
        }
        return instance;
    }

 public ArrayList<SoinMP> parseSoins(String jsonText){
        try {
            soins=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                SoinMP s = new SoinMP();
                
                s.setId(((int)Float.parseFloat( obj.get("id").toString())));
                s.setTitre_soin_mp(obj.get("titreSoinMP").toString());
                s.setDescription_soin_mp(obj.get("descriptionSoinMP").toString());
                s.setAdresse_soin_mp(obj.get("adresseSoinMP").toString());
                s.setLien_image_smp(obj.get("lienImageSMP").toString());
                s.setMoyenne(Float.parseFloat(obj.get("moyenne").toString()));
                s.setValeur(Float.parseFloat(obj.get("note").toString()));
                s.setAvis(obj.get("avis").toString());
                soins.add(s);
            }
            
        } catch (IOException ex) {
            
        }
        return soins;
    }
       public ArrayList<SoinMP> getAllSoins(int id, int iduser ){
        
        String url = Statics.BASE_URL_Soin + "/Afficher/"+id+"/"+iduser;

         ConnectionRequest req = new ConnectionRequest();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                soins = parseSoins(new String(req.getResponseData()));

                for( SoinMP a : soins)
                {   
                    System.out.println("objet : "  + a);
                }
                
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        return soins;
    }
    
    public Boolean addNote(NoteSoin n,int iduser,int idsoin) {
     
        String url = Statics.BASE_URL_Note + "/Ajouter" + "/"+ idsoin + "/"+iduser + "/"+ n.getValeur()+"/"+ n.getAvis();
   
        ConnectionRequest req = new ConnectionRequest();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);   
    
    return resultOK; 
}
}
