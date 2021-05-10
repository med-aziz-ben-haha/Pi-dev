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

        String url = Statics.BASE_URL_User + "/inscription" + "/" + u.getLogin() + "/" + u.getPassword() + "/" + u.getEmail() + "/" + u.getNom() + "/" + u.getPrenom() + "/" + u.getSexe() + "/" + u.getAdresse_user() + "/" + u.getTelephone() + "/" + u.getRole() + "/" + u.getMatricule_fiscale() + "/" + u.getSpecialite();

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
        if (u.getPassword().equals("fauxlogin")) {
            result = "login existe deja ";
        }
        if (u.getPassword().equals("fauxmail")) {
            result = "email existe deja ";
        }

        if (u.getPassword().equals("ok")) {
            result = "ok";
        }

        return result;
    }

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

    public User parseUsers(String jsonText) {
        User u = new User();
        try {
            users = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) {

                u.setId(((int) Float.parseFloat(obj.get("id").toString())));
                u.setLogin(obj.get("login").toString());
                u.setPassword(obj.get("password").toString());
                u.setEmail(obj.get("email").toString());
                u.setNom(obj.get("nom").toString());
                u.setPrenom(obj.get("prenom").toString());
                u.setAdresse_user(obj.get("adresse_user").toString());
                u.setRole((int) Float.parseFloat(obj.get("role").toString()));
                u.setTelephone(obj.get("telephone").toString());
                u.setSexe(obj.get("sexe").toString());
                u.setLien_image_user(obj.get("lien_image_user").toString());
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
        if (login.equals("")) {
            login = "null";
        }
        if (password.equals("")) {
            password = "null";
        }

        String url = Statics.BASE_URL_User + "/connexion/" + login + "/" + password;

        System.out.println(url);
        ConnectionRequest req = new ConnectionRequest();
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
                u.setLien_image_user(users.getLien_image_user());

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        System.out.println("user" + u);

        /*if (u.getPassword().equals("faux")) {
            return false
        } else {
            return true;
        }*/
        return u;
    }

    public Boolean updateUser(User u) {
        String url = Statics.BASE_URL_User + "/Profil" + "/" + u.getId() + "/" + u.getNom() + "/" + u.getPrenom() + "/" + u.getAdresse_user() + "/" + u.getTelephone();

        System.out.println(url);
        ConnectionRequest req = new ConnectionRequest();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });

        return resultOK;
    }

    public ArrayList<User> getALL() {

        String url = Statics.BASE_URL_User + "/list";

        System.out.println(url);
        ConnectionRequest req = new ConnectionRequest();
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
                users = parseUser(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        System.out.println("user" + users);

        /*if (u.getPassword().equals("faux")) {
            return false
        } else {
            return true;
        }*/
        return users;
    }

    public ArrayList<User> parseUser(String jsonText) {
        try {
            users = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) {

                User u = new User();
                u.setId(((int) Float.parseFloat(obj.get("id").toString())));
                u.setLogin(obj.get("login").toString());
                u.setPassword(obj.get("password").toString());
                u.setEmail(obj.get("email").toString());
                u.setNom(obj.get("nom").toString());
                u.setPrenom(obj.get("prenom").toString());
                u.setAdresse_user(obj.get("adresse_user").toString());
                u.setRole((int) Float.parseFloat(obj.get("role").toString()));
                u.setTelephone(obj.get("telephone").toString());
                u.setSexe(obj.get("sexe").toString());
                u.setLien_image_user(obj.get("lien_image_user").toString());
                users.add(u);
            }

        } catch (IOException ex) {

        }
        return users;

    }
}
