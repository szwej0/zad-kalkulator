Feature: Obliczenia

  Scenario: Pole trójkąta
    Given I am on homepage
    When I follow "Pole trójkąta by kamajo5"
    And I fill in "a" with "2"
    And I fill in "b" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 4" 
