/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javafxapplication2;

import static com.sun.deploy.config.JREInfo.getAll;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.shape.Rectangle;
import sahti.entities.CentreMed;
import sahti.entities.Services;
import sahti.services.Crud_CentreMed;
import sahti.services.Crud_Services;


/**
 *
 * @author allouch
 */
public class FXMLDocumentController implements Initializable {
    
    @FXML
    private Label label;
    @FXML
    private TextField tfdescription;
 
    @FXML
    private Button btnAddNew;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private TableColumn<CentreMed, String> description;

    @FXML
    private TableView<CentreMed> tableview;
    @FXML
    private TextField type;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private AnchorPane home;
    @FXML
    private TableColumn<CentreMed, String> Reponse;
    @FXML
    private Button btnPdf;
 
    
    
    private void initComboBox()
    {
        type.getSelectionModel().clearSelection();
ObservableList<String> listType = (ObservableList<String>) new CrudType().getAllNames();  
type.getItems().addAll(listType); 
    
    }
    
    
    private void refresh()
    {
         showAll();
    type.getSelectionModel().clearSelection();
    tfdescription.clear();
    }
 
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        recupererReclamation();
        initComboBox();
      refresh();
    }    

    @FXML
    private void btnAddNewOnAction(ActionEvent event) {

             CentreMed C=new CentreMed();
            String typerec=type.getSelectionModel().getSelectedItem();
            CrudType ct= new CrudType();
        int id= ct.GetIdFromNom(typerec);
            C.setType_reclamation_id(id);
            C.setUser_id(2);
             C.setDescription_reclamation(tfdescription.getText());
new CrudReclamation().ajouter(p);

        refresh();
         
}

    @FXML
    private void btnUpdateOnAction(ActionEvent event) {
       CentreMed p = tableview.getSelectionModel().getSelectedItem();
         String typerec=type.getSelectionModel().getSelectedItem();
            CrudType ct= new CrudType();
      
            int id= ct.GetIdFromNom(typerec);
            p.setType_reclamation_id(id);        
             p.setDescription_reclamation(tfdescription.getText());
      
             
             CrudReclamation crs = new CrudReclamation();
            crs.update(p);
          refresh();
    }

    @FXML
    private void btnDeleteOnAction(ActionEvent event) {
 
        CentreMed t = tableview.getSelectionModel().getSelectedItem();
        CrudReclamation crs = new CrudReclamation();
        crs.supprimer(t);
          refresh();
    }

    
    private void showAll()
    {     tableview.getItems().clear();

        ObservableList<CentreMed> list = (ObservableList<CentreMed>) new CrudReclamation().getAll();    
        description.setCellValueFactory(new PropertyValueFactory<CentreMed, String>("description_reclamation"));
        Reponse.setCellValueFactory(new PropertyValueFactory<CentreMed, String>("Reponse"));

        tableview.setItems(list); 
    
    }
   
 private void recupererReclamation(){
    
    tableview.setOnMouseClicked(e->{
        CentreMed r= tableview.getSelectionModel().getSelectedItem();
        tfdescription.setText(r.getDescription_reclamation());
       CrudType ct=new CrudType();
      Type ty= ct.Gettype(r.getType_reclamation_id());
        type.getSelectionModel().select(ty.getType_reclamation());
    });

    }
    @FXML
    private void comboboxtype(ActionEvent event) {
    }


    @FXML
    private void envoiAccueil(ActionEvent event) {
    }
    
    
}
