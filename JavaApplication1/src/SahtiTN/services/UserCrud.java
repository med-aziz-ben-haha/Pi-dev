/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.services;
import SahtiTN.entities.User;
import SahtiTN.tools.MyConnection;
import java.awt.AWTException;
import java.awt.SystemTray;
import static java.lang.Math.max;
import static java.lang.Math.max;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;
/**
 *
 * @author LENOVO
 */
public class UserCrud {


    Connection cn2;
    Statement st;

//    public void ajouterUser() {
//        String requete = "INSERT INTO personne (username, password) VALUES ('test1','testpwd1')";
//        try {
//            st = cn2.createStatement();
//            st.executeUpdate(requete);
//            System.out.println("ajout établie ! ");
//
//        } catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//
//        }
//    }
    public UserCrud() {
         cn2 =MyConnection.getInstance().getCnx();
        
    }

    public void ajouterUser(User u) {
       
        String requete2 = "INSERT INTO user ( `login`, `nom`, `prenom`, `telephone`, "
                + "`email`, `sexe`, `password`, `role`, `lien_image_user`, `fullname`, `adresse_user`) "
                + "VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);
            
            pst.setString(1, u.getLogin());
            pst.setString(2, u.getNom());
            pst.setString(3, u.getPrenom());
            pst.setString(4, u.getTelephone());
            pst.setString(5, u.getEmail());
            pst.setString(6, u.getSexe());
            pst.setString(7, u.getPassword());
            pst.setInt(8, u.getRole());
            pst.setString(9, u.getLien_image_user());
            pst.setString(10, u.getFullname());
            pst.setString(11, u.getAdresse_user());
            
           pst.executeUpdate();
            System.out.println("User added");
           
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } 
    }
  
    public void modifierUser(User u, String userLogin, String userNom, String userPrenom, String userTel, String userMail, String userSexe, String userPassword, String userLienImage, String userAdresse) {
           String userFullname=userNom;
        String requete2 = "UPDATE user SET login = ?, nom = ?, prenom = ?, telephone = ?, email = ?, sexe = ?, password = ?, lien_image_user =?, user_fullname=?, user_adresse=? WHERE id = ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);

            pst.setString(1, userLogin);
            pst.setString(2, userNom);
            pst.setString(3, userPrenom);
            pst.setString(4, userTel);
            pst.setString(5, userMail);
            pst.setString(6, userSexe);
            pst.setString(7, userPassword);
            pst.setString(8, userLienImage);
            pst.setString(9, userFullname);
            pst.setString(10, userAdresse);
            
            pst.setInt(11, u.getId());

            pst.executeUpdate();
            System.out.println("Utilisateur modifié");
          
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }  
    }

    public void deleteUser(User u) {

        String requete2 = "DELETE FROM user WHERE id= ?";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);
            pst.setInt(1, u.getId());

            pst.executeUpdate();
            System.out.println("Utilisateur supprimé");
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public List<User> afficherUser() {

        ArrayList<User> utilisateurs = new ArrayList<>();
        String requete = "SELECT * FROM user where role<>0";

        try {
            PreparedStatement pst = cn2.prepareStatement(requete);
             
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                User u = new User();
                u.setId(rs.getInt("id"));
                u.setLogin(rs.getString("login"));
                u.setEmail(rs.getString("email"));
                u.setNom(rs.getString("nom"));
                u.setPrenom(rs.getString("prenom"));
                u.setTelephone(rs.getString("telephone"));
                u.setSexe(rs.getString("sexe"));
                u.setAdresse_user(rs.getString("adresse_user"));
                u.setLien_image_user(rs.getString("lien_image_user"));

                utilisateurs.add(u);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return utilisateurs;
    }


    /*    public void InscriptionUser(User u) {
        Scanner sc = new Scanner(System.in);

    
        System.out.println("Saisissez votre username");
        String login = sc.next();
        System.out.println(login);

        System.out.println("Saisissez votre password");
        String password = sc.next();
        System.out.println(password);

        System.out.println("Saisissez votre email");
        String email = sc.next();
        System.out.println(email);
        

        u.setLogin(login);
        u.setEmail(email);
        u.setPassword(password);

        

        UserCrud utilisateurs = new UserCrud();
         utilisateurs.ajouterUser(u);
        
    }*/

    public List<User> rechercherUser(String besoin, String caractere) {

        ArrayList<User> utilisateurs = new ArrayList<>();
        String requete = "select * from user where " + besoin + " LIKE '" + caractere + "%'";

        try {
            PreparedStatement pst2 = cn2.prepareStatement(requete);
            //    pst2.setString(1, besoin);

            pst2.executeQuery();
            System.out.println("recherche done");

            ResultSet rs = pst2.executeQuery();

            while (rs.next()) {
                User u = new User();
                u.setLogin(rs.getString("login"));
                u.setEmail(rs.getString("email"));
                u.setNom(rs.getString("nom"));
                u.setPrenom(rs.getString("prenom"));
                u.setTelephone(rs.getString("telephone"));
                u.setSexe(rs.getString("sexe"));
                u.setAdresse_user(rs.getString("adresse_user"));
                u.setLien_image_user(rs.getString("lien_image_user"));
           
                utilisateurs.add(u);
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return utilisateurs;
    }

    public void trierUser(String o) {

        try {

            String requete2 = "SELECT * FROM user order by " + o;
            PreparedStatement pst = cn2.prepareStatement(requete2);
            //   pst.setString(1, o);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                User u = new User();
                u.setLogin(rs.getString("login"));
                u.setEmail(rs.getString("email"));
                u.setNom(rs.getString("nom"));
                u.setPrenom(rs.getString("prenom"));
                u.setTelephone(rs.getString("telephone"));
                u.setSexe(rs.getString("sexe"));
                u.setAdresse_user(rs.getString("adresse_user"));
                u.setLien_image_user(rs.getString("lien_image_user"));
                switch (o) {
                    case "login":
                        System.out.println("user login = " + u.getLogin());
                        break;
                    case "email":
                        System.out.println("email = " + u.getEmail());
                        break;
                      default:
                        System.out.println("verifier le paramétre svp !!!!!!!!!");

                }
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    public String listUser() {
        String mail = "";
        try {

            String requete2 = "SELECT * FROM user";
            PreparedStatement pst = cn2.prepareStatement(requete2);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                mail += "\n\n";
                User u = new User();
                             
                u.setLogin(rs.getString("login"));
                u.setEmail(rs.getString("email"));
                u.setNom(rs.getString("nom"));
                u.setPrenom(rs.getString("prenom"));
                u.setTelephone(rs.getString("telephone"));
                u.setSexe(rs.getString("sexe"));
                u.setAdresse_user(rs.getString("adresse_user"));
                u.setLien_image_user(rs.getString("lien_image_user"));          

               
                mail += " ID USER = " + u.getId();
                mail += "\n  username = " + u.getLogin(); 
                mail += "\n  Email = " + u.getEmail();
             }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return mail;
    }

    public boolean VerifUserLogin(String s_login, String s_password) {

        String sql = "SELECT * FROM user WHERE login = ? and password = ?";

        try {
            PreparedStatement pst = cn2.prepareStatement(sql);
            pst.setString(1, s_login);
            pst.setString(2, s_password);
            ResultSet rs = pst.executeQuery();
            if (!rs.next()) {
                return false;

            } else {

                return true;
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
        return false;
    }

    public boolean VerifUserMail(String s_email) {

        String sql = "SELECT * FROM user WHERE email = ? ";

        try {
            PreparedStatement pst = cn2.prepareStatement(sql);
            pst.setString(1, s_email);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return false;

            } else {

                return true;
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
        return false;
    }

    public boolean VerifUserUsername(String s_username) {

        String sql = "SELECT * FROM user WHERE username = ? ";

        try {
            PreparedStatement pst = cn2.prepareStatement(sql);
            pst.setString(1, s_username);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return false;

            } else {

                return true;
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
        return false;
    }
    public int verifRole(String s_login)
    {
     String sql = "SELECT role FROM user WHERE login = ? ";

        try {
            PreparedStatement pst = cn2.prepareStatement(sql);
            pst.setString(1, s_login);
            ResultSet rs = pst.executeQuery();
                        if (rs.next()) {
               return rs.getInt("role");

            } else {

               return rs.getInt("role");
            }
           
        } catch (Exception e) {
            e.printStackTrace();
        }
        
    
    return 0;
    }
    public String generateUserCode(int length) {
        String chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; // Tu supprimes les lettres dont tu ne veux pas
        String pass = "";
        for (int x = 0; x < length; x++) {
            int i = (int) Math.floor(Math.random() * 62); // Si tu supprimes des lettres tu diminues ce nb
            pass += chars.charAt(i);
        }
        System.out.println(pass);
        return pass;
    }

    public void modifierPwdUser(String userMail, String passW) {

        String requete2 = "UPDATE user SET password = ?  WHERE email = ? ";

        try {

            PreparedStatement pst = cn2.prepareStatement(requete2);
            pst.setString(1, passW);
            pst.setString(2, userMail);
            pst.executeUpdate();
            System.out.println("User password  updated");

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

  
    public int generateId() {
        int pass = (int) ((Math.random() * ((99999999 - 1) + 1)) + 1);
        return pass;
    }
}
