/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;

import SahtiTN.entities.User;
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
public class ServiceUser {
    public ArrayList<User> users;

    public static ServiceUser instance = null;
    public boolean resultOK;
   

  /*  private ServiceUser() {
        req = new ConnectionRequest();
    }*/

    public static ServiceUser getInstance() {
        if (instance == null) {
            instance = new ServiceUser();
        }
        return instance;
    }

    public String addUser(User u) {
         String result = null;
        String url = Statics.BASE_URL_User + "/inscription" + "/"+ u.getLogin()+"/"+ u.getPassword() + "/"+ u.getEmail()    +"/"+ u.getNom() +"/"+ u.getPrenom()  + "/"+ u.getSexe() +"/"+ u.getAdresse_user() +"/"+ u.getTelephone();
    
        System.out.println(url);
        ConnectionRequest req = new ConnectionRequest();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                  User user = parseTasks(new String(req.getResponseData()));
                  u.setPassword(user.getPassword());
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        System.out.println(u.getPassword());
        if (u.getPassword().equals("fauxlogin"))
        {result="login existe deja ";}
    if (u.getPassword().equals("fauxmail"))
        {result="email existe deja ";}
    
     if (u.getPassword().equals("ok"))
        {result="ok";}
    
    
    
    return result; }

    public User parseTasks(String jsonText) {
        User u = new User();

        try {
            users = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) {
                u.setPassword(obj.get("password").toString());
                users.add(u);
            }

        } catch (IOException ex) {

        }
        return u;
    }   
     public User parseUsers(String jsonText){
      User u  = new User();   
         try {
           users = new ArrayList<>();
           JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                
                
                u.setId(((int)Float.parseFloat( obj.get("id").toString())));
                u.setLogin(obj.get("login").toString());
                u.setPassword(obj.get("password").toString());
                u.setEmail(obj.get("email").toString());
                u.setNom(obj.get("nom").toString());
                u.setPrenom(obj.get("prenom").toString());
                u.setAdresse_user(obj.get("adresse_user").toString());
                u.setRole((int)Float.parseFloat(obj.get("role").toString()));
                u.setTelephone(obj.get("telephone").toString());
                u.setSexe(obj.get("sexe").toString());            
              users.add(u);
            }
            
        } catch (IOException ex) {
            
        }
        return u;
     
    }
/*public User parseRole(String jsonText) {
        User u = new User();

        try {
            users = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) {
                u.setRole(obj.get("roles").toString());
                users.add(u);
            }

        } catch (IOException ex) {

        }
        return u;
    }
 */
    
    
 /*   public User parseUsers(String jsonText) {
        User u = new User();
        try {
            users = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) {
                u.setNom(obj.get("nom").toString());
                u.setPrenom(obj.get("prenom").toString());
                u.setSexe(obj.get("sexe").toString());
                u.setAdresse_user(obj.get("adresse").toString());
                u.setTelephone(obj.get("telephone").toString());
                u.setLogin(obj.get("login").toString());
                u.setEmail(obj.get("email").toString());
                users.add(u);
                return u;
            }

        } catch (IOException ex) {

        }
        return u;

    }*/

    public User VerifUser(String login, String password) {

        User u = new User();
        if (login.equals("")){login="null";}
        if (password.equals("")){password="null";}
        
        String url = Statics.BASE_URL_User + "/connexion/"+login +"/" + password;

        System.out.println(url);
        ConnectionRequest req = new ConnectionRequest ();
        req.setUrl(url);
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        req.setPost(false);
       
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                User users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
                u.setId(users.getId());
                u.setLogin(users.getLogin());
                u.setPassword(users.getPassword());
                u.setEmail(users.getEmail());
                u.setNom(users.getNom());
                u.setPrenom(users.getNom());
                u.setAdresse_user(users.getAdresse_user());
                u.setRole(users.getRole());
                u.setTelephone(users.getTelephone().toString());
                u.setSexe(users.getSexe().toString());     
                
             
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
   
        System.out.println("user"+u);
       
        /*if (u.getPassword().equals("faux")) {
            return false
        } else {
            return true;
        }*/
        return u;
    }
  /*    
         public Boolean VerifUser(String username, String password,String email,String prenom) {

        User u = new User();

        String url = Statics.BASE_URL_User + "/users/Connexion/?username=" + username + "&password=" + password+ "&email=" +email+"&prenom=" +prenom;

        System.out.println(url);
        ConnectionRequest req =new ConnectionRequest();
        req.setUrl(url);
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                User users = parseTasks(new String(req.getResponseData()));
                req.removeResponseListener(this);
                u.setPassword(users.getPassword());

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        System.out.println(users);
        System.out.println(u.getPassword());

        if (u.getPassword().equals("faux")) {
            return false;
        } else {
            return true;
        }
    }*/
    
  /*  public User ProfilUsers(String Login) {
        User u = new User();
        String url = Statics.BASE_URL + "/mobileuser/profile?username=" + Login;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                User users = parseUsers(new String(req.getResponseData()));
                req.removeResponseListener(this);
                u.setNom(users.getNom());
                u.setPrenom(users.getPrenom());
                u.setSexe(users.getSexe());
                u.setAdresse(users.getAdresse());
                u.setTel(users.getTel());
                u.setUsername(users.getUsername());
                u.setEmail(users.getEmail());

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return u;
    }

    public boolean EditUser(User u, String Login) {

        String url = Statics.BASE_URL + "/mobileuser/edit?username=" + Login + "&email=" + u.getEmail() + "&password=" + u.getPassword() + "&nom=" + u.getNom() + "&prenom=" + u.getPrenom() + "&sexe=" + u.getSexe() + "&adresse=" + u.getAdresse() + "&tel=" + u.getTel();

        System.out.println(url);

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
    }*/
//*************************************     Contrôle saisie        ********************************************//
/*public Boolean TestUser(String username) {

        User u = new User();

        String url = Statics.BASE_URL_User + "/users/role?username=" + username;
       ConnectionRequest req = new ConnectionRequest ();
        System.out.println(url);

        req.setUrl(url);
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
             //   User users = parseRole(new String(req.getResponseData()));
                req.removeResponseListener(this);
               // u.setRoles(users.getRoles());
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        System.out.println(users);
        //System.out.println(u.getRoles());

        if (u.getRoles().equals("true")) {
            return true;
        } else {
            return false;
        }
    }*/
}
