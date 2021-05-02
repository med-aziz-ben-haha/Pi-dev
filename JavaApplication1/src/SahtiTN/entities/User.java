/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

import java.util.Objects;

/**
 *
 * @author LENOVO
 */
public class User {
    private int id;
    private String login;
    private String password;
    private String nom;
    private String prenom;
    private String adresse_user;
    private String matricule_fiscale;
    private String telephone;
    private String specialite;
    private String email;
    private String sexe;
    private int role;
    private String lien_image_user;
    private String fullname;
    
    
    
    public User() {
    }

    public User(String login, String password) {
        this.login = login;
        this.password = password;
    }

    public User( String login, String password, String nom, String prenom, String adresse_user, String telephone, String email, String sexe, int role, String lien_image_user, String fullname) {
        
        this.login = login;
        this.password = password;
        this.nom = nom;
        this.prenom = prenom;
        this.adresse_user = adresse_user;
     
        this.telephone = telephone;
       
        this.email = email;
        this.sexe = sexe;
        this.role = role;
        this.lien_image_user = lien_image_user;
        this.fullname = nom;
    }
        public User(int id, String login, String nom, String prenom, String telephone, String email) {
        
        this.login = login;
        this.nom = nom;
        this.prenom = prenom;
        this.telephone = telephone;
        this.email = email;
        this.fullname = nom;
    }
    public User( String login, String password, String nom, String prenom, String adresse_user, String matricule_fiscale, String telephone, String specialite, String email, String sexe, int role, String lien_image_user, String fullname) {
        this.id = id;
        this.login = login;
        this.password = password;
        this.nom = nom;
        this.prenom = prenom;
        this.adresse_user = adresse_user;
        this.matricule_fiscale = matricule_fiscale;
        this.telephone = telephone;
        this.specialite = specialite;
        this.email = email;
        this.sexe = sexe;
        this.role = role;
        this.lien_image_user = lien_image_user;
        this.fullname = nom;
    }

    public String getAdresse_user() {
        return adresse_user;
    }

    public void setAdresse_user(String adresse_user) {
        this.adresse_user = adresse_user;
    }

    public int getRole() {
        return role;
    }

    public void setRole(int role) {
        this.role = role;
    }

    public String getLien_image_user() {
        return lien_image_user;
    }

    public void setLien_image_user(String lien_image_user) {
        this.lien_image_user = lien_image_user;
    }

    public String getFullname() {
        return fullname;
    }

    public void setFullname(String fullname) {
        this.fullname = fullname;
    }

    
    public int getId() {
        return id;
    }

    public String getLogin() {
        return login;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getMatricule_fiscale() {
        return matricule_fiscale;
    }

    public void setMatricule_fiscale(String matricule_fiscale) {
        this.matricule_fiscale = matricule_fiscale;
    }

    public String getSpecialite() {
        return specialite;
    }

    public void setSpecialite(String specialite) {
        this.specialite = specialite;
    }

    public String getSexe() {
        return sexe;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    @Override
    public String toString() {
        return "User{" + "id=" + id + ", login=" + login + ", password=" + password + ", nom=" + nom + ", prenom=" + prenom + ", adresse_user=" + adresse_user + ", matricule_fiscale=" + matricule_fiscale + ", telephone=" + telephone + ", specialite=" + specialite + ", email=" + email + ", sexe=" + sexe + ", role=" + role + ", lien_image_user=" + lien_image_user + ", fullname=" + fullname + '}';
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 47 * hash + this.id;
      
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final User other = (User) obj;
        if (this.id != other.id) {
            return false;
        }
        if (this.role != other.role) {
            return false;
        }
        if (!Objects.equals(this.login, other.login)) {
            return false;
        }
        if (!Objects.equals(this.password, other.password)) {
            return false;
        }
        if (!Objects.equals(this.nom, other.nom)) {
            return false;
        }
        if (!Objects.equals(this.prenom, other.prenom)) {
            return false;
        }
        if (!Objects.equals(this.adresse_user, other.adresse_user)) {
            return false;
        }
        if (!Objects.equals(this.matricule_fiscale, other.matricule_fiscale)) {
            return false;
        }
        if (!Objects.equals(this.telephone, other.telephone)) {
            return false;
        }
        if (!Objects.equals(this.specialite, other.specialite)) {
            return false;
        }
        if (!Objects.equals(this.email, other.email)) {
            return false;
        }
        if (!Objects.equals(this.sexe, other.sexe)) {
            return false;
        }
        if (!Objects.equals(this.lien_image_user, other.lien_image_user)) {
            return false;
        }
        if (!Objects.equals(this.fullname, other.fullname)) {
            return false;
        }
        return true;
    }

    public void setId(int id) {
        this.id = id;
    }

    
    
    

    
}
