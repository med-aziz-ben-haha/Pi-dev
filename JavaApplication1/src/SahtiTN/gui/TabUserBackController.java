/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.User;
import SahtiTN.services.UserCrud;
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
import javafx.scene.control.Label;
import javafx.scene.image.ImageView;
import javafx.scene.text.TextFlow;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.text.Text;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class TabUserBackController implements Initializable {

    @FXML
    private ImageView image;
    @FXML
    private TextFlow adresse;
    @FXML
    private Button btn_supprimer;
    @FXML
    private TextFlow nom;
    @FXML
    private TextFlow prenom;
    @FXML
    private TextFlow email;
    @FXML
    private Label tell;
    UserCrud users= new UserCrud();
    User userdata;
    @FXML
    private Label sexe;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    public void setUserData (User userdata)
    {this.userdata= userdata;
    image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + userdata.getLien_image_user()));
    adresse.getChildren().add(new Text(userdata.getAdresse_user()));
    nom.getChildren().add(new Text(userdata.getNom()));
    prenom.getChildren().add(new Text(userdata.getPrenom()));
    email.getChildren().add(new Text(userdata.getEmail()));
    tell.setText(userdata.getTelephone());
    sexe.setText(userdata.getSexe());
    btn_supprimer.setId(Integer.toString(userdata.getId()));
      
    
    
    }


    @FXML
    private void envoi_supprimer(ActionEvent event) {
         users.deleteUser(Integer.parseInt(btn_supprimer.getId()));
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherUser.fxml"));
            //récupération du root  à partir du fichier fxml

            Parent root = loader.load();
            //récupération du controller lier au fichier fxml

            AfficherUserController dpc = loader.getController();
            //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
            btn_supprimer.getScene().setRoot(root);

        } catch (IOException ex) {
            Logger.getLogger(TabUserBackController.class.getName()).log(Level.SEVERE, null, ex);
        }

        
    }
    
}
