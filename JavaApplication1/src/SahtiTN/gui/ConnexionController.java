/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.tools.BCrypt;
import SahtiTN.tools.Session;
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
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class ConnexionController implements Initializable {

    @FXML
    private Button btn_crea_co;
    @FXML
    private Button btn_Connexion;
    @FXML
    private ImageView logo;
    @FXML
    private Hyperlink mdp_oublie;
    @FXML
    private PasswordField password;
    @FXML
    private TextField login;
    UserCrud utilisateurs = new UserCrud();

    Stage dialogStage = new Stage();
    Scene scene;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    public static void infoBox(String infoMessage, String titleBar, String headerMessage) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle(titleBar);
        alert.setHeaderText(headerMessage);
        alert.setContentText(infoMessage);
        alert.showAndWait();
    }

    @FXML
    private void LoginUser(ActionEvent event) {
        String s_login = login.getText().toString();
        String s_password = password.getText().toString();
        int role;
        User u = new User();
        u = utilisateurs.VerifUserLogin(s_login);
        if (u == null) {
            infoBox(" Verifier votre Login  ", "Echec", null);
        } else {
            if (BCrypt.checkpw(s_password, u.getPassword()) == false) {
                infoBox("Verifier votre mot de passe  ", "Echec", null);
            } else {
                role = utilisateurs.verifRole(s_login);
                Session.StartSession().SetSessionUser(u);

                if (role == 0) {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageBack.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root;
                    try {
                        root = loader.load();

                        //récupération du controller lier au fichier fxml 
                        SahtiTN.gui.HomepageBackController dpc = loader.getController();
                        //        dpc.setLbMessage("" + username.getText() + "");

                        login.getScene().setRoot(root);
                    } catch (IOException ex) {
                        Logger.getLogger(ConnexionController.class.getName()).log(Level.SEVERE, null, ex);
                    }

                }
                if (role == 1) {//récupération fichier fxml
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFront.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root;
                    try {
                        root = loader.load();

                        //récupération du controller lier au fichier fxml 
                        SahtiTN.gui.HomepageFrontController dpc = loader.getController();
                        //        dpc.setLbMessage("" + username.getText() + "");

                        login.getScene().setRoot(root);
                    } catch (IOException ex) {
                        Logger.getLogger(ConnexionController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
                if (role == 2) {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontMed.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root;
                    try {
                        root = loader.load();

                        //récupération du controller lier au fichier fxml 
                        SahtiTN.gui.HomepageFrontMedController dpc = loader.getController();
                        //        dpc.setLbMessage("" + username.getText() + "");

                        login.getScene().setRoot(root);
                    } catch (IOException ex) {
                        Logger.getLogger(ConnexionController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
                if (role == 3) {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPhar.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root;
                    try {
                        root = loader.load();

                        //récupération du controller lier au fichier fxml 
                        SahtiTN.gui.HomepageFrontPharController dpc = loader.getController();
                        //        dpc.setLbMessage("" + username.getText() + "");

                        login.getScene().setRoot(root);
                    } catch (IOException ex) {
                        Logger.getLogger(ConnexionController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
                if (role == 4) {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPara.fxml"));
                    //récupération du root  à partir du fichier fxml
                    Parent root;
                    try {
                        root = loader.load();

                        //récupération du controller lier au fichier fxml 
                        SahtiTN.gui.HomepageFrontParaController dpc = loader.getController();
                        //        dpc.setLbMessage("" + username.getText() + "");

                        login.getScene().setRoot(root);
                    } catch (IOException ex) {
                        Logger.getLogger(ConnexionController.class.getName()).log(Level.SEVERE, null, ex);
                    }

                }
            }
        }

    }

    @FXML
    public void MdpOublie() {

        //récupération fichier fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("mdpOublie.fxml"));
        try {
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            login.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(ConnexionController.class.getName()).log(Level.SEVERE, null, ex);
        }
        //récupération du controller lier au fichier fxml 
        MdpOublieController dpc = loader.getController();

    }

    @FXML
    public void envoiCreer() throws IOException {
        //récupération fichier fxml
        FXMLLoader loader = new FXMLLoader(getClass().getResource("InscriptionChoix.fxml"));
        //récupération du root  à partir du fichier fxml
        Parent root = loader.load();
        //récupération du controller lier au fichier fxml 
        InscriptionChoixController dpc = loader.getController();
        //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

        login.getScene().setRoot(root);

    }

}
