/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;
import SahtiTN.entities.JavamailUtil;
import static SahtiTN.gui.ConnexionController.infoBox;
import SahtiTN.services.UserCrud;
import java.io.IOException;
import java.net.URL;
import java.util.Optional;
import java.util.Random;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.control.TextInputDialog;
import javafx.scene.image.ImageView;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class MdpOublieController implements Initializable {

    @FXML
    private Button btn_crea_co;
    @FXML
    private Label lbMessage;
    @FXML
    private TextField email;
    @FXML
    private ImageView logo;
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
        String s_email = email.getText().toString();

        if (utilisateurs.VerifUserMail(s_email) == true) {
            infoBox("Enter Correct Email", "Failed", null);
        } else {
            try {
                //  infoBox("Login Successfull", "Success", null);

                String code = utilisateurs.generateUserCode(6);
                JavamailUtil mailing = new JavamailUtil();
                mailing.sendMail(s_email, code);

                TextInputDialog dialog = new TextInputDialog("Votre code");
                dialog.setTitle("Text Input Dialog");
                dialog.setHeaderText("Veuillez saisir le code  pour continuer");
                dialog.setContentText("Saisir le code :");

// Traditional way to get the response value.
                Optional<String> result = dialog.showAndWait();
                if (result.isPresent()) {
                    System.out.println("Votre code : " + result.get());
                }
                if (result.get().equals(code)) {

                 try{   //récupération fichier fxml
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("mdpNouveau.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root = loader.load();
                    //récupération du controller lier au fichier fxml
                    MdpNouveauController dpc = loader.getController();
                    dpc.setLbMessage(email.getText());
                    email.getScene().setRoot(root);}    
                 catch (IOException ex) {
                Logger.getLogger(MdpOublieController.class.getName()).log(Level.SEVERE, null, ex);
            }

                } else {
                try{
                    //récupération fichier fxml
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("mdpOublie.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root = loader.load();
                    //récupération du controller lier au fichier fxml
                }catch (IOException ex) {
                Logger.getLogger(MdpOublieController.class.getName()).log(Level.SEVERE, null, ex);
            }
                }

// The Java 8 way to get the response value (with lambda expression).
                result.ifPresent(email -> System.out.println("Le code saisie est : " + code));
            } catch (Exception ex) {
                Logger.getLogger(MdpOublieController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
    }
    
}
