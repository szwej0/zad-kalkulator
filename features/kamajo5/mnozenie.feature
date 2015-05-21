Feature: Obliczenia

  Scenario: Objętość prostopadłościanu
    Given I am on homepage
    When I follow "mnozenie by kamajo5"
    And I fill in "A" with "2"
    And I fill in "B" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 8"