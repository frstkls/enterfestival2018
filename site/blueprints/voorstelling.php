<?php if(!defined('KIRBY')) exit ?>

title: Voorstelling
pages: false
files: true
  sortable: true
fields:
  title:
    label: Titel
    type:  text
  description:
    label: Omschrijving
    type:  textarea	
  text:
    label: Tekst
    type:  textarea
  Dag:
    label: Dag
    type: checkboxes 
    options: field
    field:
      page: voorstellingen
      name: dag
      separator: ,  
  Dag:
    label: Zone
    type: checkboxes 
    options: field
    field:
      page: voorstellingen
      name: zone@
      separator: ,  
  coverImage:
    label: Beeld overzichtspagina
    type: image    
    width: 1/2
  showonhome:
    label: Tonen op homepagina?
    type: toggle
    text: yes/no	