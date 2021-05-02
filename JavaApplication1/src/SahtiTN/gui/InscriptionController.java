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
import java.awt.image.BufferedImage;
import java.io.File;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.UUID;
import javafx.embed.swing.SwingFXUtils;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.RadioButton;
import javafx.scene.control.ToggleGroup;
import javafx.scene.image.Image;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import org.apache.commons.io.FilenameUtils;
import SahtiTN.tools.BCrypt;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import org.apache.commons.validator.routines.EmailValidator;

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
    @FXML
    private ImageView userImage;
    @FXML
    private Button btn_image;
     User u= new User();
     UserCrud utilisateurs = new UserCrud();

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
        EmailValidator validator = EmailValidator.getInstance();
        if(email.getText().compareTo("")==0||password.getText().compareTo("")==0||login.getText().compareTo("")==0){
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Un ou plusieurs champs sont manquants"); 
        alert.setHeaderText("Un ou plusieurs champs sont manquants ");
        alert.setContentText("Les champs e-mail, login et mot de passe sont obligatoires !");
        alert.showAndWait();
        }else if(validator.isValid(email.getText())==false){
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Adresse mail non valid "); 
        alert.setHeaderText("Adresse mail non valid ");
        alert.setContentText("");
        alert.showAndWait();
        email.clear();
       } 
        else if(utilisateurs.isExisteEmail(email.getText())){
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Adresse Mail existe déja"); 
        alert.setHeaderText("");
        alert.setContentText("Adresse Mail existe déja !");
        alert.showAndWait();
        } 
        else if(utilisateurs.isExisteLogin(login.getText())){
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Login existe déja"); 
        alert.setHeaderText("");
        alert.setContentText("Login existe déja !");
        alert.showAndWait();
        }
        else{
        u.setLogin(login.getText());
        String hashedPassword = BCrypt.hashpw(password.getText(),BCrypt.gensalt());
        u.setPassword(hashedPassword);
        u.setNom(nom.getText());
        u.setPrenom(prenom.getText());
        u.setAdresse_user(adresse.getText());
        u.setTelephone(telephone.getText());
        u.setEmail(email.getText());
        u.setSexe(gender.getSelectedToggle().toString().substring(21, 26));
        u.setFullname(nom.getText());
        u.setRole(1);
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
            }}
        
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

    @FXML
    private void insertImage(ActionEvent event) {
        FileChooser fileChooser = new FileChooser();
        File selectedFile = fileChooser.showOpenDialog(new Stage());
                try {
                BufferedImage bufferedImage = ImageIO.read(selectedFile);
                Image image = SwingFXUtils.toFXImage(bufferedImage, null);
                userImage.setImage(image);
                String uniqueid = UUID.randomUUID().toString();
                System.out.println("\n" + uniqueid);
                
                System.out.println(selectedFile.getPath());
                String extension= FilenameUtils.getExtension(selectedFile.getAbsolutePath());
              
                Path tmp = Files.move(Paths.get(selectedFile.getPath()),
                       Paths.get("C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\"+uniqueid+"."+extension));
              System.out.print(tmp);
              
               
              u.setLien_image_user(uniqueid+"."+extension);
                
                } catch (IOException ex) {
                    System.out.print(ex.getMessage());
                
            }
    }
    
}
