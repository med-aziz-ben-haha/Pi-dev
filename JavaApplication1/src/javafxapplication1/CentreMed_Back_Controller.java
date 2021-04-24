/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javafxapplication2;

import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DecimalFormat;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.PieChart.Data;

import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import sahti.entities.Reclamation;
import sahti.entities.Type;
import sahti.services.CrudReclamation;
import sahti.services.CrudType;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.util.Duration;
import sahti.entities.Reclamation;
import sahti.interfaces.Ireclamation;
import sahti.tools.MyConnection;
import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author eya
 */
public class ReclamationBackController implements Initializable {

    @FXML
    private TableView<Reclamation> tableView;
    @FXML
    private TableColumn<Reclamation, String> description;
    @FXML
    private TableColumn<Reclamation, String> reponse;
    @FXML
    private Button btnAdd;
    @FXML
    private Button btnUpdate;
    @FXML
    private TextField tfReponse;
    @FXML
    private TextField tfdescription;

    
    ObservableList<PieChart.Data> piechartdata;
    @FXML
    private PieChart piechart;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       recupererReclamation();
       Stat();
       piechart.setData(piechartdata);
      refresh();
    }    

    @FXML
    private void btnAddOnAction(ActionEvent event) {
    }

    @FXML
    private void btnUpdateOnAction(ActionEvent event) {
        
        
        
                //Send notification
                              Notifications notificationBuild = Notifications.create()
                                      .title("Traitement Reclamation")
                                      .text("Traitement de reclamation est envoyé au client avec succes")
                                      .graphic(null)
                                      .hideAfter(Duration.seconds(5))
                                      .position(Pos.CENTER)
                                      .onAction(new EventHandler<ActionEvent>() {
                                  @Override
                                  public void handle(ActionEvent event) {
                                      System.out.println("click here");
                                  }
                                  
                              });
                              notificationBuild.show();
                                      
        
        
        
          Reclamation p = tableView.getSelectionModel().getSelectedItem();
             p.setReponse(tfReponse.getText());
  CrudReclamation crs = new CrudReclamation();
            crs.updateReponse(p);
          refresh();
        
    }
    
   
    private void showAll()
    {     tableView.getItems().clear();

        ObservableList<Reclamation> list = (ObservableList<Reclamation>) new CrudReclamation().getAll();    
        description.setCellValueFactory(new PropertyValueFactory<Reclamation, String>("description_reclamation"));
        reponse.setCellValueFactory(new PropertyValueFactory<Reclamation, String>("Reponse"));

        tableView.setItems(list); 
    
    }
   
 private void recupererReclamation(){
    
    tableView.setOnMouseClicked(e->{
        Reclamation r= tableView.getSelectionModel().getSelectedItem();
        tfReponse.setText(r.getReponse());
       tfdescription.setText(r.getDescription_reclamation());
    });  
    
 }
    
     
   
    private void refresh()
    {       piechart.setData(piechartdata);

         showAll();
    tfReponse.clear();
     tfdescription.clear();
    }
 
    
    private Connection con;
    private ResultSet rs=null;
    private ResultSet rs1=null;
    private PreparedStatement pst,pst1;
    
    private void Stat(){
        
           ArrayList<Integer> np=new ArrayList<Integer>();
ArrayList<String> cat=new ArrayList<String>();
    Connection cnx=MyConnection.getInstance().getCnx();

        piechartdata=FXCollections.observableArrayList();
    try {
       
        pst=cnx.prepareStatement("select * from type_reclamation");
        rs=pst.executeQuery();
       
        while(rs.next() )
        {
           
             
            pst1=cnx.prepareStatement("select count(*) as countab FROM reclamation WHERE type_reclamation_id="+rs.getInt("id"));
           rs1=pst1.executeQuery(); 
        while(rs1.next())
        {       
            int i=Integer.valueOf(rs1.getString("countab"));
            piechartdata.add(new PieChart.Data(rs.getString("type_reclamation"),i));
            
            np.add(i);
            cat.add(rs.getString("type_reclamation"));
        }
      
    }
    } catch (SQLException ex) {
        System.out.println("stat reclamation");
    } 
     piechart.setData(piechartdata);
      }
    
        
        
        
   
    
            
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
