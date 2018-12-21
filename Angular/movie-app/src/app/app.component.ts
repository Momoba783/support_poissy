import { Component, ViewChild } from '@angular/core';


import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { NavController, Platform } from '@ionic/angular';
import { StatusBar } from '@ionic-native/status-bar/ngx';
import { MyMoviesPage} from "./my-movies/my-movies.page";

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html'
})
export class AppComponent {
@ViewChild(NavController) nav: NavController;

rootpage = MyMoviesPage;

  public appPages = [
    {
      title: 'My movies',
      url: '/my-movies',
      icon: 'videocam'
    },
    {
      title: 'Movie List',
      url: '/movie-list',
      icon: 'list'
    }
  ];

  constructor(
    private platform: Platform,
    private splashScreen: SplashScreen,
    private statusBar: StatusBar
  ) {
    this.initializeApp();
  }

  initializeApp() {
    this.platform.ready().then(() => {
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }
}
