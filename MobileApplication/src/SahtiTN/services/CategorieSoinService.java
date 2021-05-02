/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.CategorieSoinMP;
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
public class CategorieSoinService {
       public ArrayList<CategorieSoinMP> catsoins;

    public static CategorieSoinService instance ;
    //private ConnectionRequest req ;
    
    /*public AideService()
    { req = new ConnectionRequest();
    }*/
    
    public boolean resultOK;
 
     public static CategorieSoinService getInstance() {
        if (instance == null) {
            instance = new CategorieSoinService();
        }
        return instance;
    }

 public ArrayList<CategorieSoinMP> parseCatSoin(String jsonText){
        try {
            catsoins=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                CategorieSoinMP c = new CategorieSoinMP();
                c.setId(((int)Float.parseFloat( obj.get("id").toString())));
                c.setLibelle_categorie_soin_mp(obj.get("libelleCategorieSoinMP").toString());
                c.setLien_icone_csmp(obj.get("lienIconeCSMP").toString());
               
                catsoins.add(c);
            }
            
        } catch (IOException ex) {
            
        }
        return catsoins;
    }
       public ArrayList<CategorieSoinMP> getAllCatSoins(){
        
        String url = Statics.BASE_URL_CatSoin + "/Afficher";
     
         ConnectionRequest req = new ConnectionRequest();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                catsoins = parseCatSoin(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return catsoins;
    }
    
}
