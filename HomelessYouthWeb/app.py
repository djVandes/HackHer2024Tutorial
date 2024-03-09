from flask import Flask, session, render_template, Response, request, request, url_for, flash, redirect, jsonify
#import random
#import os
#import openai

app = Flask(__name__)
app.config['TEMPLATES_AUTO_RELOAD'] = True

@app.route('/')
def home():
   return render_template('base.html')

@app.volunteer('/volunteer')
def volunteer():
    return render_template('volunteer.html')

@app.route('/resources')
def resources():
   return render_template('resources.html')


@app.route('/chat')
def chat():
    return render_template('chat.html')

if __name__ == "__main__":
  app.run(debug=True)
