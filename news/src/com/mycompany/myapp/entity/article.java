package com.mycompany.myapp.entity;

public class article {
	
	private String titre,description,content,active,cat_id,vue,image;



	private int id;
	

	public article() {
		// TODO Auto-generated constructor stub
	}

	public article (String t,String d, String c,String a,String ci,String v, String i) {
		titre =t;
		description=d;
		content=c;
		active=a;
		cat_id=ci;
		vue=v;
                image=i;

	}


	public String getVue() {
		return vue;
	}

	public void setVue(String vue) {
		this.vue = vue;
	}

	public String getCat_id() {
		return cat_id;
	}

	public void setCat_id(String cat_id) {
		this.cat_id = cat_id;
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

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public String getActive() {
		return active;
	}

	public void setActive(String active) {
		this.active = active;
	}
	
	public String getImage() {
		return image;
	}

	public void setImage(String image) {
		this.image = image;
	}


	@Override
	public String toString() {
		return "article [titre=" + titre + ", description=" + description + ", content=" + content + ", active="
				+ active + ", cat_id=" + cat_id + ", vue=" + vue + ", id=" + id + "]";
	}



}
