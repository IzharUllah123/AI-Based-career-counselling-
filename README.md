# AI-Based Career Counselling System

A machine learning web application that recommends IT career paths based on a user's skill scores.

## ML Model
- Algorithm: BaggingClassifier (50 Decision Trees)
- Dataset: 9,000 samples, 17 skill features
- Accuracy: ~91.3% (15-fold cross-validation)
- Model saved as: careerlast.pkl

## Tech Stack
- Python (scikit-learn, pandas, numpy)
- PHP + MySQL (web interface)
- Flask (model serving bridge)

## How to Run
```bash
pip install -r requirements-1.txt
pip install -r requirements-2.txt
python bagging.py
```

## License
MIT
