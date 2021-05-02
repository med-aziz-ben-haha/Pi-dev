/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.tools.BCrypt;
import SahtiTN.services.UserCrud;
import static SahtiTN.gui.ConnexionController.infoBox;
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
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;


/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class MdpNouveauController implements Initializable {

    @FXML
    private Button btn_crea_co;
    @FXML
    private TextField password;
    @FXML
    private ImageView logo;
    @FXML
    private Label lbMessage;
    UserCrud utilisateurs = new UserCrud();
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void RécuprationPwdUser(ActionEvent event) {
             String s_password = password.getText();
        String msg = lbMessage.getText();
        utilisateurs.modifierPwdUser(msg, BCrypt.hashpw(s_password,BCrypt.gensalt()));

        infoBox(" Password modifié ", "Success", null);

            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
        try {
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml 
            btn_crea_co.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(MdpNouveauController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }
    
       public String getLbMessage() {
        return lbMessage.getText();
    }

    public void setLbMessage(String lbMessage) {
        this.lbMessage.setText(lbMessage);
    }
    
}
