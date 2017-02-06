import numpy as np
from sklearn import tree
import urllib
from flask import Flask, jsonify
from flask import request , json
from flask_cors import CORS, cross_origin

# load the CSV file as a numpy matrix
dataset = np.loadtxt("trained.txt", delimiter=",")
#print(dataset.shape)
# separate the data from the target attributes
X = dataset[:,0:6]
y = dataset[:,6]
clf = tree.DecisionTreeClassifier()
clf.fit(X, y)
score = clf.score(X, y)

#print(score)
#prediction =  clf.predict([[3,2.25,3.5,4,3.5,2]])
#print(prediction)
# iris = dataset
# test_idx = [0,50,100]

# #training data
# train_target = np.delete(iris.target , test_idx)
# train_data =   np.delete(iris.data ,test_idx , axis=0)

# #testing data 
# test_target = iris.target[test_idx]
# test_data = iris.data[test_idx]


# clf = tree.DecisionTreeClassifier()
# clf.fit(train_data,train_target)

# #print train_data[56] , train_target[56]


def sixth_prediction(data):
	y = dataset[:,6]
	clf = tree.DecisionTreeClassifier()
	clf.fit(X, y)
	score = clf.score(X, y)

	print(score)
	prediction =  clf.predict([data])
	return prediction

def seventh_prediction(data):
	y = dataset[:,7]
	clf = tree.DecisionTreeClassifier()
	clf.fit(X, y)
	score = clf.score(X, y)

	print(score)
	prediction =  clf.predict([data])
	return prediction

def eight_prediction(data):
	y = dataset[:,8]
	clf = tree.DecisionTreeClassifier()
	clf.fit(X, y)
	score = clf.score(X, y)

	print(score)
	prediction =  clf.predict([data])
	return prediction

def nine_prediction(data):
	y = dataset[:,9]
	clf = tree.DecisionTreeClassifier()
	clf.fit(X, y)
	score = clf.score(X, y)

	print(score)
	prediction =  clf.predict([data])
	return prediction

def getPredict(test):
	#test = [5.8 , 2.4  ,5.1 , 1.3]
	six =  sixth_prediction(test) 
	seven =  seventh_prediction(test) 
	eight = eight_prediction(test)
	nine = nine_prediction(test)

	tasks = [
	    {
	        'id': 1,
	        'test_data': test,
	        'accuracy' : score,
	        'six': six[0], 
	        'seven' : seven[0],
	        'eight' : eight[0],
	        'nine'	: nine[0],
	        'done': True
	    }
	]

	return jsonify({'result': tasks})



app = Flask(__name__)
CORS(app)


@app.route('/api', methods=['POST','OPTIONS'])
def temp():
	return getPredict([4,3.5,3.75,3.75,2,3.5])


@app.route('/', methods=['POST','OPTIONS'])
def predict():
    eng =  request.form['title'];
    # mat = request.form['mat'];
    # phy = request.form['phy'];
    # che = request.form['che'];
    # bio = request.form['bio'];
    # pl1 = request.form['pl1'];
    list = eng.split(",")
    return getPredict(list)

@app.route('/add', methods=['POST'])
def add():
	test_d = request.json['title']
	list = test_d.split(",")
	print list
    	return getPredict(list)


if __name__ == '__main__':
      app.run(host='0.0.0.0', port=5000)

