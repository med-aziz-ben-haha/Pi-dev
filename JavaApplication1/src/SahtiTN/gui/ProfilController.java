/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.User;
import SahtiTN.services.UserCrud;
import SahtiTN.tools.Session;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.ResourceBundle;
import java.util.UUID;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import org.apache.commons.io.FilenameUtils;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class ProfilController implements Initializable {

    @FXML
    private Hyperlink btn_MP;
    @FXML
    private Hyperlink btn_Med;
    @FXML
    private Hyperlink btn_reclamation;
    @FXML
    private Hyperlink btn_Ord;
    @FXML
    private Hyperlink btn_act;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Hyperlink LienProfil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    @FXML
    private AnchorPane profildata;
    @FXML
    private ImageView profilimage;
    @FXML
    private Label mailvalue;
    @FXML
    private Label typevalue;
    @FXML
    private Label nomvalue;
    @FXML
    private Label prenomvalue;
    @FXML
    private Label telvalue;
    @FXML
    private Label loginValue;
 UserCrud users= new UserCrud();
    @FXML
    private Button btn_modif;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
          profilimage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\userProfil.png"));
    User u = Session.StartSession().getSessionUser();
    
    mailvalue.setText(u.getEmail());
    loginValue.setText(u.getLogin());
    if (u.getRole()==1)
    {
    typevalue.setText("Utilisateur");
    }
    if (u.getRole()==2)
    {
    typevalue.setText("Medecin");
    }
    if (u.getRole()==3)
    {
    typevalue.setText("Pharmacien");
    }
    if (u.getRole()==1)
    {
    typevalue.setText("Pharmacien");
    }
    if(u.getLien_image_user()!=null){
   //   profilimage.setImage(new Image("file:C:\\Users\\ASUS\\Desktop\\integrationfinal\\Projet3eme\\SymfonyApplication\\public\\profil\\"+information.getImage()));    
    profilimage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\Pi-dev\\ProjetPidev\\public\\uploads\\" + u.getLien_image_user() ));
    }
    if(u.getNom()!=null){
    nomvalue.setText(u.getNom());
    }
    if(u.getPrenom()!=null){
    prenomvalue.setText(u.getPrenom());
    }
    if(u.getTelephone()!=null){
    telvalue.setText(u.getTelephone());
    }      FileChooser fileChooser = new FileChooser();
    
            /*FileChooser.ExtensionFilter extFilterJPG = 
                    new FileChooser.ExtensionFilter("JPG files (.JPG)", ".JPG");
            FileChooser.ExtensionFilter extFilterjpg = 
                    new FileChooser.ExtensionFilter("jpg files (.jpg)", ".jpg");
            FileChooser.ExtensionFilter extFilterPNG = 
                    new FileChooser.ExtensionFilter("PNG files (.PNG)", ".PNG");
            FileChooser.ExtensionFilter extFilterpng = 
                    new FileChooser.ExtensionFilter("png files (.png)", ".png");
            fileChooser.getExtensionFilters()
                    .addAll(extFilterJPG, extFilterjpg, extFilterPNG, extFilterpng);
*/
        Button button = new Button("Changer Photo de Profil");
        button.setStyle("-fx-text-fill:white");
        button.setLayoutX(profilimage.getLayoutX()+10);
        button.setLayoutY(profilimage.getLayoutY()+profilimage.getFitHeight()+10);
        button.setMaxWidth(profilimage.getImage().getWidth());
        
        button.setOnAction(e -> {
            File selectedFile = fileChooser.showOpenDialog(new Stage());
                try {
                BufferedImage bufferedImage = ImageIO.read(selectedFile);
                Image image = SwingFXUtils.toFXImage(bufferedImage, null);
                profilimage.setImage(image);
                String uniqueid = UUID.randomUUID().toString();
                System.out.println("\n" + uniqueid);
          
                System.out.println(selectedFile.getPath());
                String extension= FilenameUtils.getExtension(selectedFile.getAbsolutePath());
               Path tmp = Files.move(Paths.get(selectedFile.getPath()),
                       Paths.get("C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\Pi-dev\\ProjetPidev\\public\\uploads\\"+uniqueid+"."+extension));
              System.out.print(tmp);
               u.setLien_image_user(uniqueid+"."+extension);
              
               users.updateImage(u);
                
                } catch (IOException ex) {
                    System.out.print(ex.getMessage());
                
            }
            
        });
        profildata.getChildren().add(button);
    }    
      @FXML
    private void envoiAccueil(ActionEvent event) {
        //récupération fichier fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.HomepageFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

   

    @FXML
    private void sedeconnecter(ActionEvent event) {
        Session.getSession().clearSession();
         FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_MP(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMPFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.AfficherCategorieSoinMPFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_Med(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionMedicamentFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionMedicamentFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_Ord(ActionEvent event) {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionOrdonnanceFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionOrdonnanceFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_reclamation(ActionEvent event) {
          FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionReclamationFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            GestionReclamationFrontController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_act(ActionEvent event) {
               FXMLLoader loader = new FXMLLoader(getClass().getResource("HomeFront.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
          

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_profil(ActionEvent event) {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Profil.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
          

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void modifierlink(ActionEvent event) {
        btn_modif.setOpacity(0);
    mailvalue.setOpacity(0);
        TextField mailvalueinput = new TextField();
        mailvalueinput.setLayoutX(mailvalue.getLayoutX());
        mailvalueinput.setLayoutY(mailvalue.getLayoutY());
        mailvalueinput.setText(mailvalue.getText());
        loginValue.setOpacity(0);
        TextField logininput = new TextField();
        logininput.setLayoutX(loginValue.getLayoutX());
        logininput.setLayoutY(loginValue.getLayoutY());
        logininput.setText(loginValue.getText());
        nomvalue.setOpacity(0);
        TextField nomvalueinput = new TextField();
        nomvalueinput.setLayoutX(nomvalue.getLayoutX());
        nomvalueinput.setLayoutY(nomvalue.getLayoutY());
        nomvalueinput.setText(nomvalue.getText());
        prenomvalue.setOpacity(0);
        TextField prenomvalueinput = new TextField();
        prenomvalueinput.setLayoutX(prenomvalue.getLayoutX());
        prenomvalueinput.setLayoutY(prenomvalue.getLayoutY());
        prenomvalueinput.setText(prenomvalue.getText());
        telvalue.setOpacity(0);
        TextField telvalueinput = new TextField();
        telvalueinput.setLayoutX(telvalue.getLayoutX());
        telvalueinput.setLayoutY(telvalue.getLayoutY());
        telvalueinput.setText(telvalue.getText());
        profildata.getChildren().addAll(mailvalueinput,logininput,nomvalueinput,prenomvalueinput,telvalueinput);
        Button modifierbutton = new Button("modifier votre compte");
        modifierbutton.setLayoutX(600);
        modifierbutton.setLayoutY(400);
        modifierbutton.setStyle("-fx-text-fill:white");
        profildata.getChildren().add(modifierbutton);
        modifierbutton.setOnAction(new EventHandler<ActionEvent>() {
        @Override
        public void handle(ActionEvent actionEvent) {
        if(logininput.getText().compareTo("")==0||mailvalueinput.getText().compareTo("")==0){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("un ou plusieurs champs sont manquants"); 
        alert.setHeaderText("un ou plusieurs champs sont manquants ");
        alert.setContentText("les champs e-mail et mot de passe sont obligatoires !");
        alert.showAndWait();
        } else if(users.isExisteEmail(mailvalueinput.getText())&&(mailvalueinput.getText().compareTo(mailvalue.getText())!=0)){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Adresse Mail existe déja"); 
        alert.setHeaderText("");
        alert.setContentText("Adresse Mail existe déja !");
        alert.showAndWait();
        } 
        else if(users.isExisteLogin(logininput.getText())&&(logininput.getText().compareTo(loginValue.getText())!=0)){
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Login existe déja"); 
        alert.setHeaderText("");
        alert.setContentText("Login existe déja !");
        alert.showAndWait();
        }
        else{
            //int user_id, String nom, String prenom, String tell
        User infoedit =Session.StartSession().getSessionUser();
        infoedit.setLogin(logininput.getText());
        infoedit.setNom(nomvalueinput.getText());
        infoedit.setPrenom(prenomvalueinput.getText());
        infoedit.setTelephone(telvalueinput.getText());
        infoedit.setEmail(mailvalueinput.getText());
        
        users.modifierUser(infoedit);
         Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Profil modifié"); 
        alert.setHeaderText("Profil modifié");
        alert.setContentText("Profil modifié");
        alert.showAndWait();
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("Profil.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root;

        try {
            root = loader.load();
            //récupération du controller lier au fichier fxml 
          

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
        }
        }
    });        
    }

    
    
}
