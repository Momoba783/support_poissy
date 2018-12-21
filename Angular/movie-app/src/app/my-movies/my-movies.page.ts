import { Component, OnInit } from '@angular/core';
import { NavController, NavParams } from '@ionic/angular';
import { MovieListPage } from '../movie-list/movie-list.page';

@Component({
  selector: 'app-my-movies',
  templateUrl: './my-movies.page.html',
  styleUrls: ['./my-movies.page.scss'],
})
export class MyMoviesPage implements OnInit {

  constructor(public navCtrl: NavController, public NavParams: NavParams) { }

  ionViewDidLoad(){
    console.log("j ai bien chargé ma page MyMoviesPage");
  }

  findMovie(){
    this.navCtrl.push(MovieListPage);
  }

  ngOnInit() {
  }

}
