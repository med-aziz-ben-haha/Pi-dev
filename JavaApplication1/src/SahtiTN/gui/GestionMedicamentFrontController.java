/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Medicament;
import SahtiTN.services.MedicamentService;
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

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        afficherMedicament();
    }    

    @FXML
    private void envoiAccueil(ActionEvent event) {
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
    
}
