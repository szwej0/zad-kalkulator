Feature: Obliczenia

  Scenario: Odejmowanie
    Given I am on homepage
    When I follow "Odejmowanie by annabiala94"
    And I fill in "A" with "25"
    And I fill in "B" with "5"
    And I fill in "C" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 18"