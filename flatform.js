// 'use strict';
// import React from "react";
// import { FlatList } from "react-native";


const e = React.createElement;

const taskList = ["test"];

import { Text, View } from "react-native";

const Country = ({ name }) => (
  <View>
    <Text>{name}</Text>
  </View>
);
class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { liked: false };
  }

  render() {
    if (this.state.liked) {
      return 'You liked this.';
    }

    return e(
      'button',
      { onClick: () => this.setState({ liked: true }) },
      'Like'
    );
  }
}

const domContainer = document.querySelector('#ff');
ReactDOM.render(e(LikeButton), domContainer);