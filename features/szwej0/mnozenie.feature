Feature: Obliczenia

  Scenario: Mnozenie a * b
    Given I am on homepage
    When I follow "Mnozenie by szwej0"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 6"
