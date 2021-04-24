/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sahti.interfaces;

import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author allouch
 * @param <T>
 */
public interface Interface_Services <T> {
    public void ajouter(T t);
     public void supprimer(T t);
     public void update(T t);
     public List <T> display();
     public   ObservableList<T> getAll() ;
    
}