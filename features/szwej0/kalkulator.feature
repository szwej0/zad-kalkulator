Feature: Obliczenia

  Scenario: Kalkulator a + b
    Given I am on homepage
    When I follow "Kalkulator by szwej0"
    And I fill in "a" with "3"
    And I fill in "b" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 5"
