package com.mycompany.myapp.services;

import java.io.IOException;
import java.util.*;


import com.codename1.db.*;
import com.codename1.io.*;
import com.codename1.messaging.Message;
import com.codename1.notifications.LocalNotification;
import com.codename1.ui.Display;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entity.categorie;
import com.mycompany.myapp.utils.statics;

public class service_categorie {
	

    public static service_categorie instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
	
    public service_categorie() {
        req = new ConnectionRequest();
   }
    
    
    public static service_categorie getInstance() {
        if (instance == null) {
            instance = new service_categorie();
        }
        return instance;
    }
    
	public boolean add(categorie c) {
		
        String url = statics.BASE_URL + "/addcategorie?nom=" + c.getTitre() +"&description="+c.getDescription() ; 
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this);   
              
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

/*
Message m = new Message("Body of message");
Display.getInstance().sendMessage(new String[] {"medazizbenhaha@gmail.com"}, "Sa7ti.tn Newsletter <news@sa7ti.tn>", m);
*/
        
        
        LocalNotification n = new LocalNotification();
        n.setId("demo-notification");
        n.setAlertBody("It's time to take a break and look at me");
        n.setAlertTitle("Break Time!");
        n.setAlertSound("/notification_sound_bells.mp3"); //file name must begin with notification_sound


        Display.getInstance().scheduleLocalNotification(
                n,
                System.currentTimeMillis(), // fire date/time
                LocalNotification.REPEAT_MINUTE  // Whether to repeat and what frequency
        );
        
        return resultOK;
		
        
}

public boolean delete(int id) {

	  String url = statics.BASE_URL + "/deletecategorie?id="+id ; 
      req.setUrl(url);
      
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

public boolean edit(categorie c) {

	  String url = statics.BASE_URL + "/updatecategorie?id="+c.getId()+"&nom="+c.getTitre()+"&description="+c.getDescription() ; 
    req.setUrl(url);
    
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


public ArrayList<categorie> afficherliste(){
	
	ArrayList<categorie> categories=new ArrayList<>();
	
    String url = statics.BASE_URL+"/listcategories";
    req.setUrl(url);

    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
        	 JSONParser jsonp = new JSONParser();
        	 
        	 try {
				Map<String, Object> categorieListJson=jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
		        List<Map<String,Object>> list = (List<Map<String,Object>>) categorieListJson.get("root");
		        
		        for(Map<String,Object> obj : list){
		            
		        	categorie t = new categorie();
		           
		        	float id = Float.parseFloat(obj.get("id").toString());
		        	String titre=obj.get("nom").toString();
		        	String description=obj.get("description").toString();
		        	
		        	
		        	t.setId((int) id);
		        	t.setTitre(titre);
		        	t.setDescription(description);
		            
		        	categories.add(t);
		        }
		        
			} catch (IOException e) {
				// TODO Auto-generated catch block
			//	e.printStackTrace();
			};

        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req);

	 return categories;
}



}


