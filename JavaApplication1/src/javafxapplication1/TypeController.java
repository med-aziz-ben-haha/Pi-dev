/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javafxapplication2;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.KeyEvent;
import sahti.entities.Type;
import sahti.services.CrudType;

/**
 * FXML Controller class
 *
 * @author eya
 */
public class TypeController implements Initializable {

    @FXML
    private Label label;
    private TextField tfidT;
    @FXML
    private TextField tftype;
    @FXML
    private Button btnAddNew;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private TableView<Type> tableview;
    private TableColumn<Type, Integer> id;
    @FXML
    private TableColumn<Type, String> Type;
    @FXML
    private Button btnTrier;
    @FXML
    private TextField rechAvan;

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    public void refresh()
    {
    tftype.clear();
    ShowAllType();
    }
    
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
    recupererType();
     refresh();
    }    

    @FXML
    private void btnAddNewOnAction(ActionEvent event) {
         Type p=new Type();
         p.setType_reclamation(tftype.getText());
            new CrudType().ajouter(p);
    refresh();
 tftype.clear();
    }

    @FXML
    private void btnUpdateOnAction(ActionEvent event) {
        
        Type t = tableview.getSelectionModel().getSelectedItem();
        CrudType Type = new CrudType();
        Type.update(t.getId(),tftype.getText());
            tftype.clear();
  refresh();
    }
    

    @FXML
    private void btnDeleteOnAction(ActionEvent event) {
        
        Type t = tableview.getSelectionModel().getSelectedItem();
        CrudType crs = new CrudType();
        crs.supprimer(t);
      refresh();
        
    }

   
    
     private void ShowAllType() {
         
     tableview.getItems().clear();
ObservableList<Type> list = (ObservableList<Type>) new CrudType().getAll();  
Type.setCellValueFactory(new PropertyValueFactory<Type, String>("type_reclamation"));

        tableview.setItems(list); 
   
    }
    
    
    
    private void recupererType(){
    
    tableview.setOnMouseClicked(e->{
        Type s = tableview.getSelectionModel().getSelectedItem();
        tftype.setText(s.getType_reclamation());
    
    });

    }
  /*  @FXML
    private void evoi_gestion_util(ActionEvent event) {
         
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherUser.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherUserController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_gestion_util.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }*/

    @FXML
    private void btnTrierOnAction(ActionEvent event) {
         tableview.getItems().clear();
ObservableList<Type> list = (ObservableList<Type>) new CrudType().getAllTrier();  
Type.setCellValueFactory(new PropertyValueFactory<Type, String>("type_reclamation"));

        tableview.setItems(list); 
    }

    @FXML
    private void rechAvanOnAction(KeyEvent event) {
        
        tableview.getItems().clear();
ObservableList<Type> list = (ObservableList<Type>) new CrudType().Recher(rechAvan.getText());  
Type.setCellValueFactory(new PropertyValueFactory<Type, String>("type_reclamation"));

        tableview.setItems(list); 
        
        
    }
    
}
