package SahtiTN.entities;

public class categorie {

	private String titre,description;


	private int id;
	
	public categorie() {
		// TODO Auto-generated constructor stub
	}

	public categorie (String t,String d) {
		titre =t;
		description=d;

	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}


	public String getTitre() {
		return titre;
	}


	public void setTitre(String titre) {
		this.titre = titre;
	}
	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	@Override
	public String toString() {
		return "categorie [titre=" + titre + ", description=" + description + ", id=" + id + "]";
	}
	
	

}
