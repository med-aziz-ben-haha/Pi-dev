/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.services.CategorieSoinMPCrud;
import SahtiTN.tools.Session;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.scene.Parent;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class AfficherCategorieSoinMPFrontController implements Initializable {

    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;
    @FXML
    private Hyperlink btn_MP;

    private List<CategorieSoinMP> data;
    @FXML
    private Hyperlink btn_Med;
    @FXML
    private Hyperlink btn_Ord;
    @FXML
    private Hyperlink btn_reclamation;
    @FXML
    private Hyperlink btn_act;
    @FXML
    private Hyperlink LienProfil;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        data = new ArrayList();

        CategorieSoinMPCrud CategoriesSoinMP = new CategorieSoinMPCrud();

        CategoriesSoinMP.afficherCategorieSoinMP().forEach((c) -> {

            data.add(c);

        });

        int column = 0;
        int row = 0;

        for (int i = 0; i < data.size(); i++) {

            try {
                FXMLLoader fxmlLoader = new FXMLLoader();

                fxmlLoader.setLocation(getClass().getResource("Card.fxml"));
                AnchorPane anchorPane = fxmlLoader.load();
                CardController cardController = fxmlLoader.getController();

                column++;

                cardController.setDataCat(data.get(i));
                if (column == 3) {
                    column = 1;
                    row++;
                }

                grid.add(anchorPane, column, row);

                GridPane.setMargin(anchorPane, new Insets(2));
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
    }

    @FXML
    private void envoiAccueil(ActionEvent event) {
        int role = Session.getSession().getSessionUser().getRole();
        if (role == 1) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFront.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                SahtiTN.gui.HomepageFrontController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        if (role == 2) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontMed.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                HomepageFrontMedController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        if (role == 3) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPhar.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                HomepageFrontPharController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        if (role == 4) {
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPara.fxml"));
                //récupération du root  à partir du fichier fxml
                Parent root;

                root = loader.load();
                //récupération du controller lier au fichier fxml 
                HomepageFrontParaController dpc = loader.getController();

                btn_accueil.getScene().setRoot(root);
            } catch (IOException ex) {
                Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }

    @FXML
    private void sedeconnecter(ActionEvent event) {
        Session.getSession().clearSession();
        try {

            FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
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

            btn_MP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPFrontController.class.getName()).log(Level.SEVERE, null, ex);
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

}
