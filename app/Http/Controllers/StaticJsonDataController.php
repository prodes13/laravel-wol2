<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticJsonDataController extends Controller
{
    //
    public function get() {
        return $this->json();
    }
    
    private function json() {
        return '{
            "query": [
                {
                    "questions": [
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "The way you feel yourself",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Neutral",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Appearance (how you look)",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Neutral",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Mobility (how much you move throughout the day)",
                            "answers": {
                                "1": "None",
                                "2": "Very little",
                                "3": "Little",
                                "4": "Little more",
                                "5": "Very Much"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Mood",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Neutral",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Walks (how much time you spend on fresh air)",
                            "answers": {
                                "1": "0",
                                "2": "<15 minutes",
                                "3": "<30 minutes",
                                "4": "~30 minutes",
                                "5": "> 30 minutes"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Energy",
                            "answers": {
                                "1": "Very low",
                                "2": "Low",
                                "3": "Middle",
                                "4": "High",
                                "5": "Very high"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Nutrition",
                            "answers": {
                                "1": "Fast food",
                                "2": "Not so healthy",
                                "3": "Neutral",
                                "4": "Healthy",
                                "5": "Very healthy"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Regime",
                            "answers": {
                                "1": "Fast food",
                                "2": "Not so healthy",
                                "3": "Neutral",
                                "4": "Healthy",
                                "5": "Very healthy"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Sport",
                            "answers": {
                                "1": "None",
                                "2": "Very few",
                                "3": "Some",
                                "4": "Some more",
                                "5": "A lot"
                            }
                        },
                        {
                            "topic": "Health",
                            "message": "In this section you evaluate:",
                            "question": "Sleep",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Relationships.",
                            "message": "How satisfied and fulfilled are you with the quality of relationships in your life?",
                            "question": "Communication with others",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Neutral",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Relationships.",
                            "message": "How satisfied and fulfilled are you with the quality of relationships in your life?",
                            "question": "Friendship",
                            "answers": {
                                "1": "None",
                                "2": "Very few",
                                "3": "Few",
                                "4": "Many",
                                "5": "Very many"
                            }
                        },
                        {
                            "topic": "Relationships.",
                            "message": "How satisfied and fulfilled are you with the quality of relationships in your life?",
                            "question": "Love (your partner)",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Relationships.",
                            "message": "How satisfied and fulfilled are you with the quality of relationships in your life?",
                            "question": "Family",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Environment.",
                            "message": "Your physical environment includes your:",
                            "question": "Surroundings",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Environment.",
                            "message": "Your physical environment includes your:",
                            "question": "Relatives",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Environment.",
                            "message": "Your physical environment includes your:",
                            "question": "Colleagues",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Environment.",
                            "message": "Your physical environment includes your:",
                            "question": "Acquaintances",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Environment.",
                            "message": "Your physical environment includes your:",
                            "question": "Neighbors",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Environment.",
                            "message": "Your physical environment includes your:",
                            "question": "Opponents",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Career.",
                            "message": "How satisfied are you with the work you do for a living?",
                            "question": "Job",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Career.",
                            "message": "How satisfied are you with the work you do for a living?",
                            "question": "Career strategy",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Career.",
                            "message": "How satisfied are you with the work you do for a living?",
                            "question": "Business",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Career.",
                            "message": "How satisfied are you with the work you do for a living?",
                            "question": "Profession",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Career.",
                            "message": "How satisfied are you with the work you do for a living?",
                            "question": "Time investment",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Career.",
                            "message": "How satisfied are you with the work you do for a living?",
                            "question": "Social status",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Money.",
                            "message": "Your finances.",
                            "question": "Expenses",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Money.",
                            "message": "Your finances.",
                            "question": "Income",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Personal growth.",
                            "message": "Do you have enough time for self-development? How satisfied are you with your personal growth?",
                            "question": "Education",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Personal growth.",
                            "message": "Do you have enough time for self-development? How satisfied are you with your personal growth?",
                            "question": "Coaching",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Personal growth.",
                            "message": "Do you have enough time for self-development? How satisfied are you with your personal growth?",
                            "question": "Special training",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Personal growth.",
                            "message": "Do you have enough time for self-development? How satisfied are you with your personal growth?",
                            "question": "Personal growth",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Personal growth.",
                            "message": "Do you have enough time for self-development? How satisfied are you with your personal growth?",
                            "question": "Reading",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Brightness of life.",
                            "message": "What is the quality of emotions you get from your life? What are the activities to make your life brighter?",
                            "question": "Entertainment",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Brightness of life.",
                            "message": "What is the quality of emotions you get from your life? What are the activities to make your life brighter?",
                            "question": "Relaxation",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Brightness of life.",
                            "message": "What is the quality of emotions you get from your life? What are the activities to make your life brighter?",
                            "question": "Hobby",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Brightness of life.",
                            "message": "What is the quality of emotions you get from your life? What are the activities to make your life brighter?",
                            "question": "Travelling",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Brightness of life.",
                            "message": "What is the quality of emotions you get from your life? What are the activities to make your life brighter?",
                            "question": "Impressions",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Spiritual life.",
                            "message": "Do you have a religion? Do you work on your spirituality? Do you express your spirit in Art? What are your beliefs?",
                            "question": "Religion",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Spiritual life.",
                            "message": "Do you have a religion? Do you work on your spirituality? Do you express your spirit in Art? What are your beliefs?",
                            "question": "Spiritual practices",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Spiritual life.",
                            "message": "Do you have a religion? Do you work on your spirituality? Do you express your spirit in Art? What are your beliefs?",
                            "question": "Beliefs",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Spiritual life.",
                            "message": "Do you have a religion? Do you work on your spirituality? Do you express your spirit in Art? What are your beliefs?",
                            "question": "Meditations",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        },
                        {
                            "topic": "Spiritual life.",
                            "message": "Do you have a religion? Do you work on your spirituality? Do you express your spirit in Art? What are your beliefs?",
                            "question": "Art",
                            "answers": {
                                "1": "Very bad",
                                "2": "Bad",
                                "3": "Acceptable",
                                "4": "Good",
                                "5": "Very good"
                            }
                        }
                    ]
                }
            ]
        }';
    }
}
