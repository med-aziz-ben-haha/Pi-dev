/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;
import SahtiTN.entities.User;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import SahtiTN.services.UserCrud;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.RadioButton;
import javafx.scene.control.ToggleGroup;
/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class InscriptionController implements Initializable {

    @FXML
    private TextField email;
    @FXML
    private Button btn_inscrip;
    @FXML
    private ImageView logo;
    @FXML
    private PasswordField password;
    @FXML
    private TextField login;
    @FXML
    private TextField nom;
    @FXML
    private TextField prenom;
    @FXML
    private TextField telephone;
    @FXML
    private TextField adresse;
    @FXML
    private RadioButton radio_homme;
    @FXML
    private RadioButton radio_femme;
    @FXML
    private ToggleGroup gender;
    @FXML
    private Hyperlink btn_cnx;

    public TextField getEmail() {
        return email;
    }

    public void setEmail(TextField email) {
        this.email = email;
    }

    public Button getBtn_inscrip() {
        return btn_inscrip;
    }

    public void setBtn_inscrip(Button btn_inscrip) {
        this.btn_inscrip = btn_inscrip;
    }

    public ImageView getLogo() {
        return logo;
    }

    public void setLogo(ImageView logo) {
        this.logo = logo;
    }

    public PasswordField getPassword() {
        return password;
    }

    public void setPassword(PasswordField password) {
        this.password = password;
    }

    public TextField getLogin() {
        return login;
    }

    public void setLogin(TextField login) {
        this.login = login;
    }

    public TextField getNom() {
        return nom;
    }

    public void setNom(TextField nom) {
        this.nom = nom;
    }

    public TextField getPrenom() {
        return prenom;
    }

    public void setPrenom(TextField prenom) {
        this.prenom = prenom;
    }

    public TextField getTelephone() {
        return telephone;
    }

    public void setTelephone(TextField telephone) {
        this.telephone = telephone;
    }

    public TextField getAdresse() {
        return adresse;
    }

    public void setAdresse(TextField adresse) {
        this.adresse = adresse;
    }

    public RadioButton getRadio_homme() {
        return radio_homme;
    }

    public void setRadio_homme(RadioButton radio_homme) {
        this.radio_homme = radio_homme;
    }

    public RadioButton getRadio_femme() {
        return radio_femme;
    }

    public void setRadio_femme(RadioButton radio_femme) {
        this.radio_femme = radio_femme;
    }
    
    
    

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
      
    }  
    @FXML
    private void Inscription(ActionEvent event) 
    {     
          UserCrud utilisateurs = new UserCrud();
    
        User u= new User(login.getText(), password.getText(), nom.getText(), prenom.getText(), adresse.getText(), telephone.getText(), email.getText(), gender.getSelectedToggle().toString().substring(21, 26), 1, "emna", nom.getText());
       
        //      Logger.getLogger(StartPageController.class.getName()).log(Level.SEVERE, null, ex);
        utilisateurs.ajouterUser(u);

        //récupération fichier fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;
        
        try {
            root = loader.load();
          //récupération du controller lier au fichier fxml 
            ConnexionController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_inscrip.getScene().setRoot(root);
            } catch (IOException ex) 
            {
            Logger.getLogger(InscriptionController.class.getName()).log(Level.SEVERE, null, ex);
            }
        
    }

    @FXML
    private void envoi_cnx(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;
        
        try {
            root = loader.load();
          //récupération du controller lier au fichier fxml 
            ConnexionController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_inscrip.getScene().setRoot(root);
            } catch (IOException ex) 
            {
            Logger.getLogger(InscriptionController.class.getName()).log(Level.SEVERE, null, ex);
            }
    }
    
}
