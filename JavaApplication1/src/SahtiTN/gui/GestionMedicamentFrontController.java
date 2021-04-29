/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Medicament;
import SahtiTN.services.MedicamentService;
import SahtiTN.tools.Session;
import java.io.IOException;
import java.net.URL;
import java.time.LocalDate;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;

/**
 * FXML Controller class
 *
 * @author Ennaifer Khalil
 */
public class GestionMedicamentFrontController implements Initializable {

    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    @FXML
    private TableView<Medicament> tab_medicament;
    @FXML
    private TableColumn id_col;
    @FXML
    private TableColumn nom_medicament_col;
    @FXML
    private TableColumn descmedicament_col;
    @FXML
    private TableColumn dispo_col;
    @FXML
    private TableColumn date_modif_col;
    @FXML
    private TableColumn image_col;
    @FXML
    private TextField tf_rechercher;
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
        afficherMedicament();
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
    private void rechercheMedicament(KeyEvent event) {
         MedicamentService Mc=new MedicamentService();
        ObservableList<Medicament> medicaments = Mc.rechercheMedicament(tf_rechercher.getText());
        id_col.setCellValueFactory(new PropertyValueFactory("id"));
        nom_medicament_col.setCellValueFactory(new PropertyValueFactory("nom_medicament"));
        descmedicament_col.setCellValueFactory(new PropertyValueFactory("descmedicament"));
        dispo_col.setCellValueFactory(new PropertyValueFactory("dispo"));
        date_modif_col.setCellValueFactory(new PropertyValueFactory("date_modif"));
        image_col.setCellValueFactory(new PropertyValueFactory("showimage"));
        
        tab_medicament.setItems(medicaments); 
    }
    
    public void afficherMedicament()
    {
       MedicamentService Mc=new MedicamentService();
        ObservableList<Medicament> medicaments = Mc.afficherMedicament();
        id_col.setCellValueFactory(new PropertyValueFactory("id"));
        nom_medicament_col.setCellValueFactory(new PropertyValueFactory("nom_medicament"));
        descmedicament_col.setCellValueFactory(new PropertyValueFactory("descmedicament"));
        dispo_col.setCellValueFactory(new PropertyValueFactory("dispo"));
        date_modif_col.setCellValueFactory(new PropertyValueFactory("date_modif"));
        image_col.setCellValueFactory(new PropertyValueFactory("showimage"));
        
        tab_medicament.setItems(medicaments);
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

            tab_medicament.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
