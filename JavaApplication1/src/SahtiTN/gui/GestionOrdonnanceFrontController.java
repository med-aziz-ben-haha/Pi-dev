/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Ordonnance;
import SahtiTN.services.OrdonnanceService;
import java.net.URL;
import java.time.LocalDate;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
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
public class GestionOrdonnanceFrontController implements Initializable {

    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    @FXML
    private TableView<Ordonnance> tab_ordonnance;
    @FXML
    private TableColumn<Ordonnance, Integer> id_ord_col;
    @FXML
    private TableColumn<Ordonnance, String> contenu_ord_col;
    @FXML
    private TableColumn<Ordonnance, LocalDate> date_ord_col;
    @FXML
    private TableColumn<Ordonnance, String> liste_med_col;
    @FXML
    private TextField tf_recherche2;
    int idP=21;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        afficherOrdonnanceFront();
    }    

    @FXML
    private void envoiAccueil(ActionEvent event) {
    }

    @FXML
    private void rechercheOrdonnance(KeyEvent event) {
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<Ordonnance> ordonnances = Oc.rechercheOrdonnanceFront(tf_recherche2.getText(),idP);
        id_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,Integer>("id"));
        contenu_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("contenu"));
        date_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,LocalDate>("dateOrdonnance"));
        liste_med_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("liste_medicament"));
       
        tab_ordonnance.setItems(ordonnances);
    }
    
    private void afficherOrdonnanceFront(){
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<Ordonnance> ordonnances = Oc.afficherOrdonnanceFront(idP);
        id_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,Integer>("id"));
        contenu_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("contenu"));
        date_ord_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,LocalDate>("dateOrdonnance"));
        liste_med_col.setCellValueFactory(new PropertyValueFactory<Ordonnance,String>("liste_medicament"));
       
        tab_ordonnance.setItems(ordonnances);
    }
    
}
